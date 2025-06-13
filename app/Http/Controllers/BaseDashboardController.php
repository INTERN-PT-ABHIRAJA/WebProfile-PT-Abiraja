<?php

namespace App\Http\Controllers;

use App\Config\DashboardConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BaseDashboardController extends Controller
{
    protected $model;
    protected $modelKey;
    protected $primaryKey;
    protected $viewPath;
    protected $routePrefix;
    protected $allowedOperations = ['index', 'create', 'store', 'edit', 'update', 'destroy'];
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            // Check if user has permission to access this section
            $tableKey = $this->getTableKey();
            if ($tableKey) {
                $tables = DashboardConfig::getTables();
                if (isset($tables[$tableKey]['permissions'])) {
                    $allowedRoles = $tables[$tableKey]['permissions'];
                    if (!in_array(auth()->user()->role, $allowedRoles)) {
                        abort(403, 'Unauthorized action.');
                    }
                }
            }
            return $next($request);
        });
    }
    
    /**
     * Set the model and related configuration
     */
    protected function setModel(string $model, string $modelKey = null)
    {
        $this->model = $model;
        $this->modelKey = $modelKey ?? Str::camel(class_basename($model));
        
        // Get the primary key
        $instance = new $model;
        $this->primaryKey = $instance->getKeyName();
        
        return $this;
    }
    
    /**
     * Set the view path for blade templates
     */
    protected function setViewPath(string $viewPath)
    {
        $this->viewPath = $viewPath;
        return $this;
    }
    
    /**
     * Set the route prefix for named routes
     */
    protected function setRoutePrefix(string $routePrefix)
    {
        $this->routePrefix = $routePrefix;
        return $this;
    }
    
    /**
     * Set allowed operations
     */
    protected function setAllowedOperations(array $operations)
    {
        $this->allowedOperations = $operations;
        return $this;
    }
    
    /**
     * Get dashboard config for current model
     */
    protected function getConfig(string $configKey = null)
    {
        $tables = DashboardConfig::getTables();
        foreach ($tables as $key => $config) {
            if ($config['model'] === $this->model) {
                return $configKey ? $config[$configKey] ?? null : $config;
            }
        }
        return null;
    }
    
    /**
     * Get the table key for the current model
     */
    protected function getTableKey()
    {
        $tables = DashboardConfig::getTables();
        foreach ($tables as $key => $config) {
            if ($config['model'] === $this->model) {
                return $key;
            }
        }
        return null;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (!in_array('index', $this->allowedOperations)) {
            abort(403);
        }
        
        $query = $this->model::query();
        
        // Apply search
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $searchColumns = $this->getSearchableColumns();
            
            $query->where(function ($q) use ($searchTerm, $searchColumns) {
                foreach ($searchColumns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
                }
            });
        }
        
        // Apply sort
        $sortColumn = $request->sort ?? $this->primaryKey;
        $sortDirection = $request->direction ?? 'asc';
        $query->orderBy($sortColumn, $sortDirection);
        
        // Get data with pagination
        $perPage = $request->per_page ?? 10;
        $items = $query->paginate($perPage)->withQueryString();
        
        // Get table config
        $tableKey = $this->getTableKey();
        $tableConfig = DashboardConfig::getTableColumns($tableKey);
        $config = $this->getConfig(); // Add this line to get the general config
        
        $data = [
            'items' => $items,
            'modelKey' => $this->modelKey,
            'primaryKey' => $this->primaryKey,
            'tableConfig' => $tableConfig,
            'tableKey' => $tableKey,
            'config' => $config, // Add this line to pass the config to the view
            'searchTerm' => $request->search ?? '',
            'sortColumn' => $sortColumn,
            'sortDirection' => $sortDirection,
            'routePrefix' => $this->routePrefix,
        ];
        
        return view($this->viewPath . '.index', $data);
    }
      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!in_array('create', $this->allowedOperations)) {
            abort(403);
        }
        
        $tableKey = $this->getTableKey();
        $formConfig = DashboardConfig::getFormFields($tableKey);
        
        // Process relation fields
        foreach ($formConfig as $key => $field) {
            if (isset($field['type']) && $field['type'] === 'select' && isset($field['relation'])) {
                $relationModel = $field['relation']['model'];
                $relationKey = $field['relation']['key'];
                $relationLabel = $field['relation']['label'];
                
                $options = $relationModel::all()->pluck($relationLabel, $relationKey)->toArray();
                $formConfig[$key]['options'] = $options;
            }
        }
        
        $data = [
            'modelKey' => $this->modelKey,
            'formConfig' => $formConfig,
            'formAction' => route($this->routePrefix . '.store'),
            'formMethod' => 'POST',
            'item' => null,
        ];
        
        // Check if we have separate create.blade.php, otherwise use the generic form.blade.php
        if (view()->exists($this->viewPath . '.create')) {
            return view($this->viewPath . '.create', $data);
        }
        
        return view($this->viewPath . '.form', $data);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!in_array('store', $this->allowedOperations)) {
            abort(403);
        }
        
        $tableKey = $this->getTableKey();
        $formConfig = DashboardConfig::getFormFields($tableKey);
        
        // Build validation rules
        $validationRules = [];
        foreach ($formConfig as $field => $config) {
            if (isset($config['validation'])) {
                $validationRules[$field] = $config['validation'];
            }
        }
        
        // Validate request
        $validated = $request->validate($validationRules);
        
        // Process file uploads
        $data = [];
        foreach ($formConfig as $field => $config) {
            if (isset($config['type']) && $config['type'] === 'file' && $request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store($config['path'] ?? 'uploads', $config['disk'] ?? 'public');
                $data[$field] = $path;
                
                // If this is a media file, also store mime type and size
                if ($field === 'file_path') {
                    $data['mime_type'] = $file->getMimeType();
                    $data['file_size'] = $file->getSize();
                }
            } elseif (isset($config['type']) && $config['type'] === 'password') {
                if (!empty($request->$field)) {
                    $data[$field] = bcrypt($request->$field);
                }
            } elseif ($request->has($field)) {
                $data[$field] = $request->$field;
            }
        }
        
        // Create new record
        $item = $this->model::create($data);
        
        return redirect()
            ->route($this->routePrefix . '.index')
            ->with('success', 'Record created successfully!');
    }
    
    /**
     * Show the form for editing the specified resource.
     */    public function edit($id)
    {
        if (!in_array('edit', $this->allowedOperations)) {
            abort(403);
        }
        
        $item = $this->model::findOrFail($id);
        $tableKey = $this->getTableKey();
        $formConfig = DashboardConfig::getFormFields($tableKey);
        
        // Process relation fields
        foreach ($formConfig as $key => $field) {
            if (isset($field['type']) && $field['type'] === 'select' && isset($field['relation'])) {
                $relationModel = $field['relation']['model'];
                $relationKey = $field['relation']['key'];
                $relationLabel = $field['relation']['label'];
                
                $options = $relationModel::all()->pluck($relationLabel, $relationKey)->toArray();
                $formConfig[$key]['options'] = $options;
            }
            
            // Remove create-only fields
            if (isset($field['only_create']) && $field['only_create']) {
                unset($formConfig[$key]);
            }
        }
        
        $data = [
            'item' => $item,
            'company' => $item, // Also pass the item as 'company' for backward compatibility
            'product' => $item, // Also pass the item as 'product' for backward compatibility
            'category' => $item, // Also pass the item as 'category' for backward compatibility
            'user' => $item, // Also pass the item as 'user' for backward compatibility
            'modelKey' => $this->modelKey,
            'formConfig' => $formConfig,
            'formAction' => route($this->routePrefix . '.update', $id),
            'formMethod' => 'PUT',
        ];
        
        // Check if we have separate edit.blade.php, otherwise use the generic form.blade.php
        if (view()->exists($this->viewPath . '.edit')) {
            return view($this->viewPath . '.edit', $data);
        }
        
        return view($this->viewPath . '.form', $data);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!in_array('update', $this->allowedOperations)) {
            abort(403);
        }
        
        $item = $this->model::findOrFail($id);
        $tableKey = $this->getTableKey();
        $formConfig = DashboardConfig::getFormFields($tableKey);
        
        // Build validation rules with ID exception for unique rules
        $validationRules = [];
        foreach ($formConfig as $field => $config) {
            if (isset($config['validation'])) {
                $rule = str_replace('[id]', $id, $config['validation']);
                $validationRules[$field] = $rule;
            }
        }
        
        // Validate request
        $validated = $request->validate($validationRules);
        
        // Process data for update
        $data = [];
        foreach ($formConfig as $field => $config) {
            if (isset($config['type']) && $config['type'] === 'file' && $request->hasFile($field)) {
                // Handle file upload
                $file = $request->file($field);
                $path = $file->store($config['path'] ?? 'uploads', $config['disk'] ?? 'public');
                
                // Delete old file if exists
                if ($item->$field) {
                    Storage::disk($config['disk'] ?? 'public')->delete($item->$field);
                }
                
                $data[$field] = $path;
                
                // If this is a media file, also store mime type and size
                if ($field === 'file_path') {
                    $data['mime_type'] = $file->getMimeType();
                    $data['file_size'] = $file->getSize();
                }
            } elseif (isset($config['type']) && $config['type'] === 'password') {
                // Only update password if provided
                if (!empty($request->$field)) {
                    $data[$field] = bcrypt($request->$field);
                }
            } elseif ($request->has($field)) {
                $data[$field] = $request->$field;
            }
        }
        
        // Update the record
        $item->update($data);
        
        return redirect()
            ->route($this->routePrefix . '.index')
            ->with('success', 'Record updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!in_array('destroy', $this->allowedOperations)) {
            abort(403);
        }
        
        $item = $this->model::findOrFail($id);
        
        // Check for related records before deleting
        $this->checkRelatedRecords($item);
        
        // Delete related files if any
        $tableKey = $this->getTableKey();
        $formConfig = DashboardConfig::getFormFields($tableKey);
        
        foreach ($formConfig as $field => $config) {
            if (isset($config['type']) && $config['type'] === 'file' && !empty($item->$field)) {
                Storage::disk($config['disk'] ?? 'public')->delete($item->$field);
            }
        }
        
        // Delete the record
        $item->delete();
        
        return redirect()
            ->route($this->routePrefix . '.index')
            ->with('success', 'Record deleted successfully!');
    }
    
    /**
     * Get searchable columns for the model
     */
    protected function getSearchableColumns()
    {
        $tableKey = $this->getTableKey();
        $tableConfig = DashboardConfig::getTableColumns($tableKey);
        
        $searchableColumns = [];
        foreach ($tableConfig as $column => $config) {
            // Skip relation columns for search
            if (!isset($config['relation'])) {
                $searchableColumns[] = $column;
            }
        }
        
        return $searchableColumns;
    }
    
    /**
     * Check for related records before deleting
     */
    protected function checkRelatedRecords($item)
    {
        // This method can be overridden in child controllers to check for relationships
        return true;
    }
}

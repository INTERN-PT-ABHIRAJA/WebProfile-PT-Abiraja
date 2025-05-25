@php
    $tableKey = $tableKey ?? '';
    $tableConfig = DashboardConfig::getTables()[$tableKey] ?? null;
    $title = $tableConfig ? (App::isLocale('id') ? ($tableConfig['name_id'] ?? Str::title($tableKey)) : ($tableConfig['name'] ?? Str::title($tableKey))) : 'Form';
    $isEdit = isset($item) && $item;
@endphp

<div class="bg-white rounded-lg shadow-sm overflow-hidden">
    <div class="p-5 border-b border-gray-100">
        <h3 class="text-lg font-medium text-gray-800">
            {{ $isEdit ? (App::isLocale('id') ? 'Ubah' : 'Edit') : (App::isLocale('id') ? 'Buat' : 'Create') }} {{ $title }}
        </h3>
    </div>
    
    <form action="{{ $formAction }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($formMethod !== 'POST')
            @method($formMethod)
        @endif
        
        <div class="p-5 space-y-6">
            @foreach($formConfig as $field => $config)
                @if(!isset($config['only_create']) || !$config['only_create'] || !$isEdit)
                    <div class="mb-4">                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">
                            {{ App::isLocale('id') ? ($config['label_id'] ?? Str::title(str_replace('_', ' ', $field))) : ($config['label'] ?? Str::title(str_replace('_', ' ', $field))) }}
                            @if(isset($config['required']) && $config['required'])
                                <span class="text-red-500">*</span>
                            @endif
                        </label>
                        
                        @if($config['type'] === 'text' || $config['type'] === 'email' || $config['type'] === 'number')
                            <input type="{{ $config['type'] }}" 
                                   id="{{ $field }}" 
                                   name="{{ $field }}" 
                                   value="{{ old($field, $item?->$field ?? '') }}"
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                   @if(isset($config['required']) && $config['required']) required @endif>
                        
                        @elseif($config['type'] === 'password')
                            <input type="password" 
                                   id="{{ $field }}" 
                                   name="{{ $field }}" 
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                   @if(isset($config['required']) && $config['required'] && !$isEdit) required @endif>
                        
                        @elseif($config['type'] === 'textarea')
                            <textarea id="{{ $field }}" 
                                      name="{{ $field }}" 
                                      rows="3"
                                      class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                      @if(isset($config['required']) && $config['required']) required @endif>{{ old($field, $item?->$field ?? '') }}</textarea>
                        
                        @elseif($config['type'] === 'select')
                            <select id="{{ $field }}" 
                                    name="{{ $field }}"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm"
                                    @if(isset($config['required']) && $config['required']) required @endif>
                                <option value="">Select an option</option>
                                @foreach($config['options'] as $value => $label)
                                    <option value="{{ $value }}" {{ old($field, $item?->$field ?? '') == $value ? 'selected' : '' }}>
                                        {{ $label }}
                                    </option>
                                @endforeach
                            </select>
                        
                        @elseif($config['type'] === 'file')
                            <div class="mt-1 flex items-center">
                                <input type="file" 
                                       id="{{ $field }}" 
                                       name="{{ $field }}" 
                                       class="focus:ring-primary-500 focus:border-primary-500 block w-full text-sm text-gray-500
                                             file:mr-4 file:py-2 file:px-4
                                             file:rounded-md file:border-0
                                             file:text-sm file:font-semibold
                                             file:bg-primary-50 file:text-primary-700
                                             hover:file:bg-primary-100"
                                       @if(isset($config['required']) && $config['required'] && !$isEdit) required @endif>
                            </div>
                            
                            @if($isEdit && $item?->$field)
                                <div class="mt-2">
                                    <p class="text-xs text-gray-500">Current file: {{ basename($item->$field) }}</p>
                                    @if(preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $item->$field))
                                        <img src="{{ asset('storage/' . $item->$field) }}" class="mt-2 h-24 w-auto rounded border border-gray-200" alt="Current image">
                                    @endif
                                </div>
                            @endif
                        
                        @elseif($config['type'] === 'date')
                            <input type="date" 
                                   id="{{ $field }}" 
                                   name="{{ $field }}" 
                                   value="{{ old($field, $item?->$field ? $item->$field->format('Y-m-d') : '') }}"
                                   class="mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                   @if(isset($config['required']) && $config['required']) required @endif>
                        @endif
                        
                        @error($field)
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                @endif
            @endforeach
        </div>
        
        <div class="px-5 py-4 bg-gray-50 text-right border-t border-gray-100">
            <a href="{{ route($routePrefix . '.index') }}" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                Cancel
            </a>
            <button type="submit" class="ml-2 px-4 py-2 text-sm font-medium text-white bg-primary-600 border border-transparent rounded-md shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                {{ $isEdit ? 'Update' : 'Create' }}
            </button>
        </div>
    </form>
</div>

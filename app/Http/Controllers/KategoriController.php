<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends BaseDashboardController
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setModel(Kategori::class, 'categories')
             ->setViewPath('dashboard.categories')
             ->setRoutePrefix('dashboard.categories');
    }

    /**
     * Check for related records before deleting
     */
    protected function checkRelatedRecords($item)
    {
        // Check if category has related companies
        if ($item->anakPerusahaan()->count() > 0) {
            abort(403, 'Cannot delete category with existing companies. Please remove the companies first.');
        }
        
        return true;
    }
}

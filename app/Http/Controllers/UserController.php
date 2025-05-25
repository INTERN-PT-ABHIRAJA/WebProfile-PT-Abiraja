<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends BaseDashboardController
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setModel(User::class, 'users')
             ->setViewPath('dashboard.users')
             ->setRoutePrefix('dashboard.users');
    }

    /**
     * Check for related records before deleting
     */
    protected function checkRelatedRecords($item)
    {
        // Only prevent deletion of the last admin
        if($item->role === 'admin') {
            $adminCount = User::where('role', 'admin')->count();
            if($adminCount <= 1) {
                abort(403, 'Cannot delete the last admin user');
            }
        }
        
        return true;
    }

    /**
     * Override parent update method to handle password hashing
     */
    public function update(Request $request, $id)
    {
        // Call parent update method which handles most of the logic
        return parent::update($request, $id);
    }
}

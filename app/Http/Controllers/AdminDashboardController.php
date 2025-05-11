<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Check if user has admin role
        $user = Auth::user();
        if (!$user || !in_array($user->role, ['admin', 'owner'])) {
            return redirect('/admin/login')->with('error', 'You do not have permission to access the admin panel.');
        }

        return view('filament.dashboard');
    }
}

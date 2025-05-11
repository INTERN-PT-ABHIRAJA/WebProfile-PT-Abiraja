<?php

use App\Http\Controllers\FilamentAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', [HomeController::class, 'index']);
Route::get('/welcome', function () {
    return view('welcome');
});

// Debug route to check if routing is working
Route::get('/debug-filament', function () {
    return 'Filament debug route is working. Try accessing /admin for the admin panel.';
});

// Custom admin route for testing
Route::get('/admin-test', function () {
    return redirect('/admin');
});

// Direct test of admin login URL
Route::get('/admin-login-test', function () {
    return redirect('/admin/login');
});

// Manual admin login route
Route::get('/manual-admin-login', function () {
    return view('filament.login');
});

// Custom Filament Auth Routes
Route::get('/admin/login', [FilamentAuthController::class, 'showLoginForm'])->name('filament.auth.login');
Route::post('/admin/login', [FilamentAuthController::class, 'login']);
Route::post('/admin/logout', [FilamentAuthController::class, 'logout'])->name('filament.auth.logout');

// Admin Dashboard
Route::get('/admin', [App\Http\Controllers\AdminDashboardController::class, 'index'])->middleware('auth');

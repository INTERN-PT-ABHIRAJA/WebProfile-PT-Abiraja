<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

// Translator page route
Route::get('/translator', function () {
    return view('translator');
});

// Debug route to check if routing is working
Route::get('/debug-filament', function () {
    return 'Filament debug route is working. Try accessing /admin for the admin panel.';
});

// Language switching routes
Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');

// Note: All admin routes are now handled by Filament directly
// No custom routes that might override Filament's built-in functionality

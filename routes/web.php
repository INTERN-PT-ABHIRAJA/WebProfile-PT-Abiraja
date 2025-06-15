<?php

use App\Http\Controllers\AnakPerusahaanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

// Test route for modal
Route::get('/test-modal', function () {
    return view('test-modal');
});

// Translator page route
Route::get('/translator', function () {
    return view('translator');
});

// Language switching routes
Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');

// Translations for JavaScript (temporarily disabled)
// Route::get('translations/{locale}', [App\Http\Controllers\TranslationController::class, 'getTranslations'])->name('translations');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Routes
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'dashboard.access'])->group(function () {
    // Dashboard home
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // User management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');

    // Category management
    Route::get('/categories', [KategoriController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [KategoriController::class, 'create'])->name('categories.create');
    Route::post('/categories', [KategoriController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [KategoriController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [KategoriController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [KategoriController::class, 'destroy'])->name('categories.delete');

    // Company management
    Route::get('/companies', [AnakPerusahaanController::class, 'index'])->name('companies.index');
    Route::get('/companies/create', [AnakPerusahaanController::class, 'create'])->name('companies.create');
    Route::post('/companies', [AnakPerusahaanController::class, 'store'])->name('companies.store');
    Route::get('/companies/{id}/edit', [AnakPerusahaanController::class, 'edit'])->name('companies.edit');
    Route::put('/companies/{id}', [AnakPerusahaanController::class, 'update'])->name('companies.update');
    Route::delete('/companies/{id}', [AnakPerusahaanController::class, 'destroy'])->name('companies.delete');

    // Product management
    Route::get('/products', [ProdukController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProdukController::class, 'create'])->name('products.create');
    Route::post('/products', [ProdukController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProdukController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProdukController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProdukController::class, 'destroy'])->name('products.delete');

    // Media management
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
    Route::post('/media', [MediaController::class, 'store'])->name('media.store');
    Route::get('/media/{id}/edit', [MediaController::class, 'edit'])->name('media.edit');
    Route::put('/media/{id}', [MediaController::class, 'update'])->name('media.update');
    Route::delete('/media/{id}', [MediaController::class, 'destroy'])->name('media.delete');
});

// Digital Services Profile Route
Route::get('/digital-services', function () {
    return view('digital-services-profile');
})->name('digital.services');

// Contact form route
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

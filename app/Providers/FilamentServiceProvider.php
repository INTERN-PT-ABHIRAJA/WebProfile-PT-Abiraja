<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Route::get('/direct-admin', function () {
            return redirect('/admin');
        });

        Route::get('/admin-status', function () {
            return 'Admin route check: ' . (class_exists('Filament\Panel') ? 'Filament Panel class exists' : 'Filament Panel class does not exist');
        });
    }
}

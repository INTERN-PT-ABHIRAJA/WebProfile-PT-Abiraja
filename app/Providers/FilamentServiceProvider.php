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

        // Custom Filament branding and UI enhancements
        Filament::registerRenderHook(
            'panels::head.end',
            fn(): string => '
                <style>
                    /* Custom UI improvements */
                    .fi-sidebar-header {
                        background-color: rgba(79, 70, 229, 0.05);
                    }
                    .fi-topbar nav {
                        background-color: white;
                        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                    }
                </style>
            '
        );

        Filament::serving(function () {
            // Add custom navigation groups
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label('Content Management')
                    ->icon('heroicon-o-document-text'),
                NavigationGroup::make()
                    ->label('User Management')
                    ->icon('heroicon-o-users'),
                NavigationGroup::make()
                    ->label('Settings')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),
            ]);
        });
    }
}

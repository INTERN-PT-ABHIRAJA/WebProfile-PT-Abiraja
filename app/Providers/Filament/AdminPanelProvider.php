<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Support\Colors\Color;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->darkMode(true)
            ->colors([
                'primary' => [
                    50 => '#f0f8ff',
                    100 => '#e0f0fe',
                    200 => '#bae2fd',
                    300 => '#7cccfd',
                    400 => '#36b3f9',
                    500 => '#0c98e9',  // Primary color
                    600 => '#0072c6',
                    700 => '#015ca0',
                    800 => '#064e84',
                    900 => '#0a416e',
                    950 => '#062a4a',
                ],
                'gray' => Color::Slate,
                'danger' => Color::Rose,
                'info' => Color::Blue,
                'success' => Color::Emerald,
                'warning' => Color::Amber,
            ])
            ->font('Inter')
            ->brandName('WebAbhiraja Admin')
            ->brandLogo(asset('assets/img/logo/Logo.png'))
            ->darkModeBrandLogo(asset('assets/img/logo/Logo.png'))
            ->favicon(asset('favicon.ico'))
            ->navigationGroups([
                NavigationGroup::make()
                    ->label('User Management')
                    ->icon('heroicon-o-users'),
                NavigationGroup::make()
                    ->label('Company Management')
                    ->icon('heroicon-o-building-office'),
                NavigationGroup::make()
                    ->label('Inventory Management')
                    ->icon('heroicon-o-shopping-bag'),
                NavigationGroup::make()
                    ->label('Content Management')
                    ->icon('heroicon-o-document-text'),
                NavigationGroup::make()
                    ->label('Settings')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->collapsed(),
            ])
            ->sidebarCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->databaseNotifications()
            ->globalSearchKeyBindings(['command+k', 'ctrl+k'])
            ->renderHook(
                'panels::body.end',
                fn(): string => '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>'
            );
    }
}

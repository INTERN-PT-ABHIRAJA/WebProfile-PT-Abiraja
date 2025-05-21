<?php

namespace App\Providers\Filament;

use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register a custom login response
        $this->app->singleton(LoginResponse::class, function () {
            return new class implements LoginResponse {
                public function toResponse($request)
                {
                    return redirect()->intended(route('filament.admin.pages.dashboard'));
                }
            };
        });
    }

    public function boot(): void
    {
        // Add custom styles and scripts to Filament
        FilamentView::registerRenderHook(
            'panels::head.end',
            fn(): string => '
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <style>
                    /* Custom global styles */
                    :root {
                        --font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
                    }

                    /* Improved button transition */
                    .fi-btn {
                        transition: transform 0.1s, box-shadow 0.1s !important;
                    }
                    
                    /* Card enhancements */
                    .fi-card {
                        overflow: hidden;
                    }
                </style>
            '
        );

        // Custom scripts at the end of the body
        FilamentView::registerRenderHook(
            'panels::body.end',
            fn(): string => '
                <script>
                    // Additional JavaScript enhancements
                    document.addEventListener("DOMContentLoaded", () => {
                        // You can add any JavaScript enhancements here
                        console.log("WebAbhiraja Admin - Theme enhancements loaded");
                    });
                </script>
            '
        );
    }
}

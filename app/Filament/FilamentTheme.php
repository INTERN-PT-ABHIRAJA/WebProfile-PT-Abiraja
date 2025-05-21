<?php

namespace App\Filament;

use Filament\Facades\Filament;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;
use Illuminate\View\Compilers\BladeCompiler;

class FilamentTheme
{
    /**
     * Apply custom theme settings across all Filament panels
     */
    public static function apply(): void
    {
        static::registerBladeDirectives();
        static::registerRoutes();
    }

    /**
     * Register custom blade directives
     */
    public static function registerBladeDirectives(): void
    {
        Blade::directive('filamentStyles', function () {
            return new HtmlString('
                <style>
                    /* Global custom styles */
                    :root {
                        --font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
                    }
                </style>
            ');
        });

        Blade::directive('filamentScripts', function () {
            return new HtmlString('
                <script>
                    // Global custom JavaScript
                    console.log("WebAbhiraja Admin - Custom theme loaded");
                </script>
            ');
        });
    }

    /**
     * Register custom routes
     */
    public static function registerRoutes(): void
    {
        // You can add any additional routes here
    }

    /**
     * Get the custom color palette
     */
    public static function getColorPalette(): array
    {
        return [
            'primary' => [
                50 => '#f8f5ff',
                100 => '#eee6fe',
                200 => '#d4c6fd',
                300 => '#b69bfa',
                400 => '#9c6df7',
                500 => '#7c3aed',
                600 => '#6d28d9',
                700 => '#5b21b6',
                800 => '#4c1d95',
                900 => '#3a1078',
                950 => '#2e1065',
            ],
            'gray' => Color::Slate,
            'danger' => Color::Rose,
            'info' => Color::Blue,
            'success' => Color::Emerald,
            'warning' => Color::Amber,
        ];
    }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // Check if the request is for the admin panel
        if (str_starts_with($request->path(), 'admin')) {
            return route('filament.admin.auth.login');
        }

        // Default to home page for now as there's no general login route
        return '/';
    }
}

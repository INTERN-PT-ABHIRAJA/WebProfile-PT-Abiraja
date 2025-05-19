<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Closure;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if session has locale set
        if (Session::has('locale')) {
            $locale = Session::get('locale');

            // Check if the locale is supported
            if (in_array($locale, ['en', 'id'])) {
                App::setLocale($locale);
            }
        } else {
            // If no session is set, default to Indonesian
            App::setLocale('id');
            Session::put('locale', 'id');
        }

        return $next($request);
    }
}

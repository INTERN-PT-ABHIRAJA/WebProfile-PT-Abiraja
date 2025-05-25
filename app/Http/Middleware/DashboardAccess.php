<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAccess
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
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        
        // Only allow admin and owner roles to access the dashboard
        if (!in_array($user->role, ['admin', 'owner'])) {
            return redirect('/')->with('error', 'You do not have permission to access the dashboard');
        }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->user() || !auth()->user()->hasRole($role)) {
            // If the user doesn't have the correct role, redirect them
            return redirect('/login');
        }

        return $next($request);
    }
}

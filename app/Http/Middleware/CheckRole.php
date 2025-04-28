<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Cek jika user telah login dan memiliki role yang sesuai
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            // Jika tidak, redirect atau tampilkan pesan error
            return redirect()->route('login')->with('error', 'Access Denied');
        }

        // Lanjutkan ke request berikutnya jika role sesuai
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Jika pengguna adalah admin, lewati middleware (admin bisa mengakses semua cabang)
        if ($user->isAdmin()) {
            return $next($request);
        }

        // Ambil ID cabang yang sedang diakses dari request (misalnya, parameter route)
        $branchId = $request->route('branch_id');

        // Jika pengguna tidak memiliki cabang yang sesuai, redirect ke halaman home atau halaman lainnya
        if ($user->branch_id !== $branchId) {
            return redirect('/home')->with('error', 'Anda tidak memiliki akses ke cabang ini.');
        }

        // Jika pengguna memiliki cabang yang sesuai, lanjutkan request
        return $next($request);
    }
}

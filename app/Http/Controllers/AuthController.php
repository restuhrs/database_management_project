<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('auth.login'); 
    }

    // Melakukan autentikasi dengan username dan password
    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mencoba login menggunakan username dan password
        $credentials = [
            'username' => $request->username,  // Gunakan username untuk autentikasi
            'password' => $request->password,
        ];

        // Autentikasi menggunakan username
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke dashboard
            return redirect()->intended('/dashboard');
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            return back()->withErrors(['login_error' => 'Username atau password salah.']);
        }
    }

    // Menampilkan dashboard berdasarkan role
    public function dashboard()
    {
        // Mengambil pengguna yang sedang login
        $user = Auth::user();

        // Mengecek role pengguna menggunakan metode yang ada di model User
        if ($user->isAdmin()) {
            return view('admin.dashboard'); 
        } elseif ($user->isKepalaCabang()) {
            return view('kc.dashboard'); 
        } elseif ($user->isSupervisor()) {
            return view('spv.dashboard'); 
        } elseif ($user->isSalesman()) {
            return view('sales.dashboard'); 
        } else {
            // Jika role tidak dikenali, arahkan ke halaman home atau halaman lain yang sesuai
            return redirect('/home');
        }
    }

    // Metode untuk logout
    public function logout()
    {
        Auth::logout(); // Melakukan logout
        return redirect('/login'); // Redirect ke halaman login
    }
}

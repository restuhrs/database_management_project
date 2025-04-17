<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ])->validate();

        if(!Auth::attempt($request->only('username', 'password'), $request->boolean('remember'))){
            session()->flash('error', 'Pengguna tidak ditemukan');
            return redirect()->back();
        }

        // return redirect()->route('dashboard');

        $user = Auth::user();

        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'kacab':
                return redirect()->route('kacab.dashboard');
            case 'sales':
                return redirect()->route('sales.dashboard');
            default:
                Auth::logout();
                session()->flash('error', 'Role tidak dikenali');
                return redirect()->route('login');
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function form_login()
    {
        return view('layouts.auth.form_login');
    }
}

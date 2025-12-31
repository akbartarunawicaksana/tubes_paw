<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user(); 

            if ($user && $user->role === 'owner') {
            return redirect('/dashboard-owner');
            }

            return redirect('/dashboard-admin');
        }

        return back()->withErrors([
        'username' => 'Username atau password salah'
        ]);
    }
}

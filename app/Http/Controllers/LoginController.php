<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.form');
    }

    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::guard('admin')->attempt([
                'username'     => $username,
                'password'     => $password,
                'id_tipe_user' => 1,
            ]))
        {
            $request->session()->regenerate();

            return redirect()->route('admin');
        }

        if (Auth::guard('player')->attempt([
                'username'     => $username,
                'password'     => $password,
                'id_tipe_user' => 2,
            ]))
        {
            $request->session()->regenerate();

            return redirect()->route('player');
        }

        return back()->withErrors([
            'eror' => 'Username atau password salah.'
        ]);
    }
}

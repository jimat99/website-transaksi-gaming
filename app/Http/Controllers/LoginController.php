<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::guard('admin')->attempt([
                'username' => $username,
                'password' => $password,
                'id_role'  => 1
            ]))
        {
            return redirect()->route('admin.dashboard.index');
        }

        if (Auth::guard('player')->attempt([
                'username' => $username,
                'password' => $password,
                'id_role'  => 2
            ]))
        {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'eror' => 'Username atau password salah.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::guard('player')->logout();
        return redirect()->route('home');
    }
}

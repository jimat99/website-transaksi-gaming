<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // public function showLoginForm(Request $request)
    // {
    //     if ($request->session()->has('username')) {
    //         return redirect()->back();
    //     } else {
    //         return view('login.form');
    //     }
    // }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if (Auth::guard('admin')->attempt([
                'username' => $username,
                'password' => $password,
                'id_role'  => 1
            ]))
        {
            $request->session()->put([
                'username' => $username, 
                'role'     => 'admin'
            ]);
            return redirect()->route('admin.index');
        }

        if (Auth::guard('player')->attempt([
                'username' => $username,
                'password' => $password,
                'id_role'  => 2
            ]))
        {
            $request->session()->put([
                'username' => $username, 
                'role'     => "player"
            ]);
            return redirect()->route('player.index');
        }

        return back()->withErrors([
            'eror' => 'Username atau password salah.'
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username', 'role');
        return redirect()->route('home');
    }
}

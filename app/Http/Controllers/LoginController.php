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
        $dataLogin = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'id_tipe_user'
        ];

        if (Auth::attempt($dataLogin)) {
            $request->session()->regenerate();

            return redirect()->route('sukses');
        }

        return back()->withErrors([
            'eror' => 'Username atau password salah.'
        ]);
    }
}

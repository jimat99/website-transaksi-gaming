<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        if (Auth::guard('admin')->check() == 1 ||
            Auth::guard('player')->check() == 1
        ) {
            return redirect()->back();
        } else {
            return view('register.create');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        Player::create([
            'email'    => $request->input('email'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password'))
        ]);

        return redirect()->route('login.form');
    }
}

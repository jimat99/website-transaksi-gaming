<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Player;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
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

        return redirect()->route('login.form')
            ->with('sukses', "Selamat, register Anda berhasil. Silahkan melakukan login!");
    }
}

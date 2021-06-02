<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('username')) {
            return redirect()->back();
        } else {
            return view('home.home');
        }
    }

    public function donate()
    {
        return view('home.donate');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::guard('admin')->check() == 1) {
            return redirect()->back();
        } else {
            return view('home.home');
        }
    }

    public function donate()
    {
        if (Auth::guard('admin')->check() == 1) {
            return redirect()->back();
        } else {
            return view('home.donate');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('username')) {
            if ($request->session()->get('role') == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->route('login.form');
        }
    }
}

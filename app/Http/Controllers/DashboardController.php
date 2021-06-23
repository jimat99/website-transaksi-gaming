<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('username')) {
            if ($request->session()->get('role') == 'admin') {
                return redirect()->route('admin.index');
            } elseif ($request->session()->get('role') == 'player') {
                return redirect()->route('player.index');
            }
        } else {
            return view('dashboard.index');
        }   
    }
}

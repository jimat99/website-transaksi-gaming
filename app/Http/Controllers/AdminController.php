<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Player;
use App\Models\Item;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::guard('admin')->check() == 1) {
            $listAdmin = Admin::all();
            $adminCount = Admin::count();
            $playerCount = Player::count();
            $playerActiveCount = Player::where('status', 1)->count();
            $itemCount = Item::count(); 
            return view('admin.main.dashboard.index', compact(
                'listAdmin',
                'adminCount',
                'playerCount',
                'playerActiveCount',
                'itemCount'
            ));
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }
}

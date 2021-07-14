<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Player;
use App\Models\Item;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::guard('admin')->check() == 1) {
            $listPlayer = Player::all();
            return view('admin.main.managePlayer.index', compact('listPlayer'));
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function create(Request $request)
    {
        if (Auth::guard('admin')->check() == 1 ||
            Auth::guard('player')->check() == 1    
        ) {
            return redirect()->back();
        } else {
            return view('home.register');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'username' => 'required',
            'password' => 'required'
        ]);

        Player::create([
            'email'      => $request->input('email'),
            'username'   => $request->input('username'),
            'password'   => Hash::make($request->input('password')),
            'gender'     => $request->input('gender'),
            'birth_date' => date_format(date_create_from_format('d/m/Y', $request->input('birth_date')), 'Y-m-d')
        ]);

        return redirect()->route('home');
    }


    public function edit(Request $request, $id)
    {
        if (Auth::guard('admin')->check() == 1) {
            $player = Player::where('id_player', $id)->first();
            return view('admin.main.managePlayer.edit', compact('player'));
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cash'   => 'required',
            'status' => 'required'
        ]);

        Player::where('id_player', $id)->update([
            'cash'   => $request->input('cash'),
            'status' => $request->input('status')
        ]);

        return redirect()->route('admin.player.index');
    }

    public function formBuyItem()
    {   
        if (Auth::guard('admin')->check() == 1) {
            return redirect()->back();
        }

        $listItem = Item::all();

        return view('home.items', compact('listItem'));
    }

    public function buyItem(Request $request)
    {   
        if (Auth::guard('player')->check() == 1) {
            $item = Item::where('id_item', $request->input('id_item'))->first();

            $player = Player::where('id_player', Auth::guard('player')->user()->id_player)->first();

            Player::where('id_player', Auth::guard('player')->user()->id_player)
                ->update(['cash' => $player->cash - $item->harga]);

            return redirect()->route('home.buy-item.form-buy-item');
        } else {
            return redirect()->route('home.buy-item.form-buy-item')
                ->with('message', 'Silahkan login terlebih dahulu!');
        }
    }
}

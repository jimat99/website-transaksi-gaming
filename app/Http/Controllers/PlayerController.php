<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->session()->get('username');
        $player   = Player::where('username', $username)->first();

        if ($request->session()->has('username')) {
            if ($request->session()->get('role') == 'player') {
                return view('player.index', ['player' => $player]);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->route('login.form');
        }
    }

    public function create()
    {
        return view('player.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'username' => 'required',
            'password' => 'required|min:8',
            'cash'     => 'required'
        ]);

        Player::create($request->all());

        return redirect()->route('player.index')
            ->with('sukses', "Register player berhasil");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        
        return view('player.edit', compact('player'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email'    => 'required|email',
            'username' => 'required',
            'password' => 'required|min:8',
            'cash'     => 'required'
        ]);

        Player::find($id)->update($request->all());

        return redirect()->route('player.index')
            ->with('success', 'Player berhasil diupdate');
    }

    public function destroy($id)
    {
        Player::find($id)->delete();

        return redirect()->route('player.index')
            ->with('success', 'Player berhasil dihapus');
    }
}

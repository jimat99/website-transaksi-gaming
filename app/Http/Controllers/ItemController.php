<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::guard('admin')->check() == 1) {
            $listItem = Item::all();
            return view('admin.main.item.index', compact('listItem'));
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function create(Request $request)
    {
        if (Auth::guard('admin')->check() == 1) {
            return view('admin.main.item.create');
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'harga'     => 'required|integer',
            'gambar'    => 'required',
            'deskripsi' => 'required'
        ]);

        Item::create([
            'nama'        => $request->input('nama'),
            'harga'       => $request->input('harga'),
            'path_gambar' => $request->file('gambar')->store('images/item', 'public'),
            'deskripsi'   => $request->input('deskripsi')
        ]);

        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request, $id)
    {
        if (Auth::guard('admin')->check() == 1) {
            $item = Item::where('id_item', $id)->first();
            return view('admin.main.item.edit', compact('item'));
        } 
        
        if (Auth::guard('player')->check() == 1) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {   
        $request->validate([
            'nama'      => 'required',
            'harga'     => 'required|integer',
            'deskripsi' => 'required'
        ]);
        
        if ($request->hasFile('gambar')) {
            Item::where('id_item', $id)
            ->update([
                'nama'        => $request->input('nama'),
                'harga'       => $request->input('harga'),
                'path_gambar' => $request->file('gambar')->store('images/item', 'public'),
                'deskripsi'   => $request->input('deskripsi')
            ]);
        } else {
            Item::where('id_item', $id)
            ->update([
                'nama'      => $request->input('nama'),
                'harga'     => $request->input('harga'),
                'deskripsi' => $request->input('deskripsi')
            ]);
        }

        return redirect()->route('admin.item.index');
    }

    public function destroy($id)
    {
        $item = Item::where('id_item', $id)->first();
        $item->delete();
        return redirect()->route('admin.item.index');
    }
}

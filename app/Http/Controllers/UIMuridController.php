<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;

class UIMuridController extends Controller
{
    public function murid()
    {
        return view('dashboard.murid.murid');
    }

    public function bimpribadisiswa()
    {
        $data = BimbinganPribadi::all();
        return view('dashboard.murid.bimpribadisiswa', compact('data'));
    }

    public function tambahbimpribadisiswa()
    {
        return view('dashboard.murid.tambahbimpribadisiswa');
    }

    public function insertbimpribadisiswa(Request $request)
    {
        BimbinganPribadi::create($request->all());
        return redirect()->route('bimpribadisiswa')->with('success', 'Data berhasil ditambahkan!');
    }
}

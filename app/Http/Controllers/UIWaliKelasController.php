<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;
use App\Models\BimbinganSosial;

class UIWaliKelasController extends Controller
{
    public function walikelas()
    {
        return view('dashboard.walikelas.walikelas');
    }

    public function bimpribadiwali()
    {
        $data = BimbinganPribadi::all();
        return view('dashboard.walikelas.bimpribadiwali', compact('data'));
    }

    public function bimsosialwali()
    {
        $data = BimbinganSosial::all();
        return view('dashboard.walikelas.bimsosialwali', compact('data'));
    }
}

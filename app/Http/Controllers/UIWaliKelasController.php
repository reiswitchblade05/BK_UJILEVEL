<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;

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
}

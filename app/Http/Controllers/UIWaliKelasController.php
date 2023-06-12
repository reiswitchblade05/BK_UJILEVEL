<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;
use App\Models\BimbinganSosial;
use App\Models\BimbinganPelajar;

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

    public function bimpelajarwali()
    {
        $data = BimbinganPelajar::all();
        return view('dashboard.walikelas.bimpelajarwali', compact('data'));
    }

    public function tambahhasilpelajarwali($id)
    {
        $data = BimbinganPelajar::find($id);
        return view('dashboard.walikelas.hasilbimpelajarwali', compact('data'));
    }

    public function inserthasilpelajarwali(Request $request, $id)
    {
        $data = BimbinganPelajar::find($id);
        $data->update([
            'status' => 'Selesai',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimpelajarwali')->with('success', 'Data berhasil diperbarui!');
    }
}

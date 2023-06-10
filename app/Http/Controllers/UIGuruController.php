<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;

class UIGuruController extends Controller
{
    public function guru()
    {
        return view('dashboard.guru.guru');
    }

    public function jadwalguru()
    {
        return view('dashboard.guru.jadwalguru');
    }

    public function bimpribadi()
    {
        $data = BimbinganPribadi::all();
        return view('dashboard.guru.bimbinganpribadi.bimpribadi', compact('data'));
    }

    public function tambahbimpribadi()
    {
        return view('dashboard.guru.bimbinganpribadi.tambahbimpribadi');
    }

    public function insertbimpribadi(Request $request)
    {
        BimbinganPribadi::create($request->all());
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil ditambahkan!');
    }

    public function tambahhasilpribadi($id)
    {
        $data = BimbinganPribadi::find($id);
        return view('dashboard.guru.bimbinganpribadi.hasilbimpribadi', compact('data'));
    }

    public function inserthasilpribadi(Request $request, $id)
    {
        $data = BimbinganPribadi::find($id);
        $data->update([
            'status' => 'Diterima',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil diperbarui!');
    }

    public function editbimpribadi($id)
    {
        $data = BimbinganPribadi::find($id);
        return view('dashboard.guru.bimbinganpribadi.editbimpribadi', compact('data'));
    }

    public function updatebimpribadi(Request $request, $id)
    {
        $data = BimbinganPribadi::find($id);
        $data->update($request->all());
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusbimpribadi(Request $request, $id)
    {
        $row = BimbinganPribadi::find($id);
        $row->delete();
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil dihapuskan!');
    }

    public function bimsosial()
    {
        return view('dashboard.guru.bimsosial');
    }

    public function petakerawanan()
    {
        return view('dashboard.guru.petakerawanan');
    }

    public function bimpelajar()
    {
        return view('dashboard.guru.bimpelajar');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class UIController extends Controller
{
    //admin pages
    public function dashboardadmin()
    {
        return view('dashboard.admin.admin');
    }

    public function kelasadmin()
    {
        return view('dashboard.admin.kelasadmin');
    }

    public function walikelasadmin()
    {
        return view('dashboard.admin.walikelasadmin');
    }

    public function guruadmin()
    {
        return view('dashboard.admin.guruadmin');
    }

    public function muridadmin()
    {
        $data = Murid::all();
        return view('dashboard.admin.muridadmin', compact('data'));
    }

    public function tambahmurid()
    {
        return view('dashboard.admin.tambahmurid');
    }

    public function insertmurid(Request $request)
    {
        Murid::create($request->all());
        return redirect()->route('muridadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editmurid($id)
    {
        $data = Murid::find($id);
        return view('dashboard.admin.editmurid', compact('data'));
    }

    public function updatemurid(Request $request, $id)
    {
        $data = Murid::find($id);
        $data->update($request->all());
        return redirect()->route('muridadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusmurid(Request $request, $id)
    {
        $data = Murid::find($id);
        $data->delete();
        return redirect()->route('muridadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function guru()
    {
        return view('dashboard.guru.guru');
    }

    public function walikelas()
    {
        return view('dashboard.walikelas.walikelas');
    }

    public function murid()
    {
        return view('dashboard.murid.murid');
    }
}

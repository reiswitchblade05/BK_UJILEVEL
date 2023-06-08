<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Walikelas;

class UIController extends Controller
{
    //admin pages
    public function dashboardadmin()
    {
        return view('dashboard.admin.admin');
    }

    public function kelasadmin()
    {
        $row = Kelas::all();
        return view('dashboard.admin.kelasadmin', compact('row'));
    }

    public function tambahkelas()
    {
        return view('dashboard.admin.tambahkelas');
    }

    public function insertkelas(Request $request)
    {
        Kelas::create($request->all());
        return redirect()->route('kelasadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editkelas($id)
    {
        $row = Kelas::find($id);
        return view('dashboard.admin.editkelas', compact('row'));
    }

    public function updatekelas(Request $request, $id)
    {
        $row = Kelas::find($id);
        $row->update($request->all());
        return redirect()->route('kelasadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapuskelas(Request $request, $id)
    {
        $row = Kelas::find($id);
        $row->delete();
        return redirect()->route('kelasadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function walikelasadmin()
    {
        $data = Walikelas::all();
        return view('dashboard.admin.walikelasadmin', compact('data'));
    }

    public function tambahwalikelas()
    {
        return view('dashboard.admin.tambahwalikelas');
    }

    public function insertwalikelas(Request $request)
    {
        Walikelas::create($request->all());
        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editwalikelas($id)
    {
        $data = Walikelas::find($id);
        return view('dashboard.admin.editwalikelas', compact('data'));
    }

    public function updatewalikelas(Request $request, $id)
    {
        $data = Walikelas::find($id);
        $data->update($request->all());
        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapuswalikelas(Request $request, $id)
    {
        $data = Walikelas::find($id);
        $data->delete();
        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function guruadmin()
    {
        $row = Guru::all();
        return view('dashboard.admin.guruadmin', compact('row'));
    }

    public function tambahguru()
    {
        return view('dashboard.admin.tambahguru');
    }

    public function insertguru(Request $request)
    {
        Guru::create($request->all());
        return redirect()->route('guruadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editguru($id)
    {
        $row = Guru::find($id);
        return view('dashboard.admin.editguru', compact('row'));
    }

    public function updateguru(Request $request, $id)
    {
        $row = Guru::find($id);
        $row->update($request->all());
        return redirect()->route('guruadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusguru(Request $request, $id)
    {
        $row = Guru::find($id);
        $row->delete();
        return redirect()->route('guruadmin')->with('success', 'Data berhasil dihapuskan!');
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

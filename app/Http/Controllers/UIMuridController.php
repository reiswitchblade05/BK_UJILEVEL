<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;
use App\Models\BimbinganSosial;
use App\Models\BimbinganKarir;
use App\Models\BimbinganPelajar;
use App\Models\Kelas;
use App\Models\Murid;

class UIMuridController extends Controller
{
    public function murid()
    {
        return view('dashboard.murid.murid');
    }

    public function bimpribadisiswa()
    {
        $data = BimbinganPribadi::with('siswa', 'kelas')->get();
        return view('dashboard.murid.bimpribadisiswa', compact('data'));
    }

    public function detailbimpribadisiswa($id)
    {
        $data = BimbinganPribadi::find($id);
        return view('dashboard.murid.detailbimpribadisiswa', compact('data'));
    }

    public function tambahbimpribadisiswa()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.murid.tambahbimpribadisiswa', compact('data', 'dataa'));
    }

    public function insertbimpribadisiswa(Request $request)
    {
        BimbinganPribadi::create($request->all());
        return redirect()->route('bimpribadisiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function bimsosialsiswa()
    {
        $data = BimbinganSosial::with('siswa', 'kelas')->get();
        return view('dashboard.murid.bimsosialsiswa', compact('data'));
    }

    public function detailbimsosialsiswa($id)
    {
        $data = BimbinganSosial::find($id);
        return view('dashboard.murid.detailbimsosialsiswa', compact('data'));
    }


    public function tambahbimsosialsiswa()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.murid.tambahbimsosialsiswa', compact('data', 'dataa'));
    }

    public function insertbimsosialsiswa(Request $request)
    {
        BimbinganSosial::create($request->all());
        return redirect()->route('bimsosialsiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function bimkarirsiswa()
    {
        $data = BimbinganKarir::all();
        return view('dashboard.murid.bimkarirsiswa', compact('data'));
    }

    public function detailbimkarirsiswa($id)
    {
        $data = BimbinganKarir::find($id);
        return view('dashboard.murid.detailbimkarirsiswa', compact('data'));
    }

    public function tambahbimkarirsiswa()
    {
        $data = Murid::all();
        return view('dashboard.murid.tambahbimkarirsiswa', compact('data'));
    }

    public function insertbimkarirsiswa(Request $request)
    {
        BimbinganKarir::create($request->all());
        return redirect()->route('bimkarirsiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function bimpelajarsiswa()
    {
        $data = BimbinganPelajar::all();
        return view('dashboard.murid.bimpelajarsiswa', compact('data'));
    }

    public function detailbimpelajarsiswa($id)
    {
        $data = BimbinganPelajar::find($id);
        return view('dashboard.murid.detailbimpelajarsiswa', compact('data'));
    }

    public function tambahbimpelajarsiswa()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.murid.tambahbimpelajarsiswa', compact('data', 'dataa'));
    }

    public function insertbimpelajarsiswa(Request $request)
    {
        BimbinganPelajar::create($request->all());
        return redirect()->route('bimpelajarsiswa')->with('success', 'Data berhasil ditambahkan!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BimbinganPribadi;
use App\Models\BimbinganSosial;
use App\Models\BimbinganPelajar;
use App\Models\Murid;
use App\Models\Kelas;

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
            'status' => 'Selesai',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil diperbarui!');
    }

    public function detailbimpribadi($id)
    {
        $data = BimbinganPribadi::find($id);
        return view('dashboard.guru.bimbinganpribadi.detailbimpribadi', compact('data'));
    }

    public function editbimpribadi($id)
    {
        $data = BimbinganPribadi::find($id);
        // dd($dataa);
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
        $data = BimbinganSosial::all();
        return view('dashboard.guru.bimbingansosial.bimsosial', compact('data'));
    }

    public function detailbimsosial($id)
    {
        $data = BimbinganSosial::find($id);
        return view('dashboard.guru.bimbingansosial.detailbimsosial', compact('data'));
    }


    public function editbimsosial($id)
    {
        $data = BimbinganSosial::find($id);
        // dd($data);
        return view('dashboard.guru.bimbingansosial.editbimsosial', compact('data'));
    }

    public function updatebimsosial(Request $request, $id)
    {
        $data = BimbinganSosial::find($id);
        $data->update($request->all());
        return redirect()->route('bimsosial')->with('success', 'Data berhasil diperbarui!');
    }

    public function tambahhasilsosial($id)
    {
        $data = BimbinganSosial::find($id);
        return view('dashboard.guru.bimbingansosial.hasilbimsosial', compact('data'));
    }

    public function inserthasilsosial(Request $request, $id)
    {
        $data = BimbinganSosial::find($id);
        $data->update([
            'status' => 'Selesai',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimsosial')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusbimsosial(Request $request, $id)
    {
        $row = BimbinganSosial::find($id);
        $row->delete();
        return redirect()->route('bimsosial')->with('success', 'Data berhasil dihapuskan!');
    }

    public function petakerawanan()
    {
        return view('dashboard.guru.petakerawanan');
    }

    public function bimpelajar()
    {
        $data = BimbinganPelajar::all();
        return view('dashboard.guru.bimbinganpelajar.bimpelajar', compact('data'));
    }

    public function detailbimpelajar($id)
    {
        $data = BimbinganPelajar::find($id);
        return view('dashboard.guru.bimbinganpelajar.detailbimpelajar', compact('data'));
    }

    public function editbimpelajar($id)
    {
        $data = BimbinganPelajar::find($id);
        // dd($data);
        return view('dashboard.guru.bimbinganpelajar.editbimpelajar', compact('data'));
    }

    public function updatebimpelajar(Request $request, $id)
    {
        $data = BimbinganPelajar::find($id);
        $data->update($request->all());
        return redirect()->route('bimpelajar')->with('success', 'Data berhasil diperbarui!');
    }

    public function tambahhasilpelajar($id)
    {
        $data = BimbinganPelajar::find($id);
        return view('dashboard.guru.bimbinganpelajar.hasilbimpelajar', compact('data'));
    }

    public function inserthasilpelajar(Request $request, $id)
    {
        $data = BimbinganPelajar::find($id);
        $data->update([
            'status' => 'Selesai',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimpelajar')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusbimpelajar(Request $request, $id)
    {
        $row = BimbinganPelajar::find($id);
        $row->delete();
        return redirect()->route('bimpelajar')->with('success', 'Data berhasil dihapuskan!');
    }
}

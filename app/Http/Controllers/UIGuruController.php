<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Murid;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\PetaKerawanan;
use App\Models\BimbinganKarir;
use App\Models\BimbinganSosial;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BimbinganPelajar;
use App\Models\BimbinganPribadi;

class UIGuruController extends Controller
{
    public function guru()
    {
        return view('dashboard.guru.guru');
    }

    public function bimkarir()
    {
        $data = BimbinganKarir::all();
        return view('dashboard.guru.bimbingankarir.bimkarir', compact('data'));
    }

    public function detailbimkarir($id)
    {
        $data = BimbinganKarir::find($id);
        return view('dashboard.guru.bimbingankarir.detailbimkarir', compact('data'));
    }

    public function tambahbimkarir()
    {
        $data = Murid::all();
        return view('dashboard.guru.bimbingankarir.tambahbimkarir', compact('data'));
    }

    public function insertbimkarir(Request $request)
    {
        BimbinganKarir::create([
            'nama_siswa' => $request->nama_siswa,
            'jadwal_bimbingan' => $request->jadwal_bimbingan,
            'karir' => $request->karir,
            'alasan_siswa' => $request->alasan_siswa,
            'tujuan_siswa' => $request->tujuan_siswa,
            'status' => 'Diproses',
        ]);
        return redirect()->route('bimkarir')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editbimkarir($id)
    {
        $data = BimbinganKarir::find($id);
        // dd($dataa);
        return view('dashboard.guru.bimbingankarir.editbimkarir', compact('data'));
    }

    public function updatebimkarir(Request $request, $id)
    {
        $data = BimbinganKarir::find($id);
        $data->update($request->all());
        return redirect()->route('bimkarir')->with('success', 'Data berhasil diperbarui!');
    }

    public function tambahhasilkarir($id)
    {
        $data = BimbinganKarir::find($id);
        return view('dashboard.guru.bimbingankarir.hasilbimkarir', compact('data'));
    }

    public function inserthasilkarir(Request $request, $id)
    {
        $data = BimbinganKarir::find($id);
        $data->update([
            'status' => 'Selesai',
            'hasil' => $request->hasil,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('bimkarir')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusbimkarir(Request $request, $id)
    {
        $row = BimbinganKarir::find($id);
        $row->delete();
        return redirect()->route('bimkarir')->with('success', 'Data berhasil dihapuskan!');
    }

    public function bimpribadi()
    {
        $data = BimbinganPribadi::all();
        return view('dashboard.guru.bimbinganpribadi.bimpribadi', compact('data'));
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

    public function tambahbimpribadi()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.guru.bimbinganpribadi.tambahbimpribadi', compact('data', 'dataa'));
    }

    public function insertbimpribadi(Request $request)
    {
        BimbinganPribadi::create([
            'nama_siswa' => $request->nama_siswa,
            'tema_konseling' => $request->tema_konseling,
            'jadwal_konseling' => $request->jadwal_konseling,
            'status' => 'Diproses',
        ]);
        return redirect()->route('bimpribadi')->with('success', 'Data berhasil ditambahkan!');
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

    public function tambahbimsosial()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.guru.bimbingansosial.tambahbimsosial', compact('data', 'dataa'));
    }

    public function insertbimsosial(Request $request)
    {
        BimbinganSosial::create([
            'nama_siswa' => $request->nama_siswa,
            'jadwal_siswa' => $request->jadwal_siswa,
            'konflik_permasalahan' => $request->konflik_permasalahan,
            'komentar' => $request->komentar,
            'status' => 'Diproses',
        ]);
        return redirect()->route('bimsosial')->with('success', 'Data berhasil ditambahkan!');
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

    public function tambahbimpelajar()
    {
        $data = Murid::all();
        $dataa = Kelas::all();
        return view('dashboard.guru.bimbinganpelajar.tambahbimpelajar', compact('data', 'dataa'));
    }

    public function insertbimpelajar(Request $request)
    {
        BimbinganPelajar::create([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'tema' => $request->tema,
            'jadwal_siswa' => $request->jadwal_siswa,
            'status' => 'Diproses',
        ]);
        return redirect()->route('bimpelajar')->with('success', 'Data berhasil ditambahkan!');
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

    public function petakerawanan()
    {
        $data = PetaKerawanan::all();
        return view('dashboard.guru.petakerawanan', compact('data'));
    }

    public function tambahpetakerawanan()
    {
        $data = Murid::all();
        $dataa = Pelanggaran::all();
        return view('dashboard.guru.tambahpetakerawanan', compact('data', 'dataa'));
    }

    public function insertpetakerawanan(Request $request)
    {
        PetaKerawanan::create($request->all());
        return redirect()->route('petakerawanan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editpetakerawanan($id)
    {
        $data = PetaKerawanan::find($id);
        $dataa = Pelanggaran::all();
        // dd($data);
        return view('dashboard.guru.editpetakerawanan', compact('data', 'dataa'));
    }

    public function updatepetakerawanan(Request $request, $id)
    {
        $data = PetaKerawanan::find($id);
        $data->update($request->all());
        return redirect()->route('petakerawanan')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapuspetakerawanan(Request $request, $id)
    {
        $row = PetaKerawanan::find($id);
        $row->delete();
        return redirect()->route('petakerawanan')->with('success', 'Data berhasil dihapuskan!');
    }

    public function exportpdf()
    {
        $data = PetaKerawanan::all();
        view()->share('data', $data);
        $pdf = Pdf::loadView('dashboard.guru.petakerawananpdf', ['data' => $data]);
        return $pdf->download('petakerawanan.pdf');
    }
}

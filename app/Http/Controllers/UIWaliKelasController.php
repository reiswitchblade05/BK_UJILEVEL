<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use App\Models\PetaKerawanan;
use App\Models\BimbinganKarir;
use App\Models\BimbinganSosial;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\BimbinganPelajar;
use App\Models\BimbinganPribadi;
use App\Exports\PetaKerawananExport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function detailbimpribadiwali($id)
    {
        $data = BimbinganPribadi::find($id);
        return view('dashboard.walikelas.detailbimpribadiwali', compact('data'));
    }

    public function bimsosialwali()
    {
        $data = BimbinganSosial::all();
        return view('dashboard.walikelas.bimsosialwali', compact('data'));
    }

    public function detailbimsosialwali($id)
    {
        $data = BimbinganSosial::find($id);
        return view('dashboard.walikelas.detailbimsosialwali', compact('data'));
    }

    public function bimkarirwali()
    {
        $data = BimbinganKarir::all();
        return view('dashboard.walikelas.bimkarirwali', compact('data'));
    }

    public function detailbimkarirwali($id)
    {
        $data = BimbinganKarir::find($id);
        return view('dashboard.walikelas.detailbimkarirwali', compact('data'));
    }

    public function petakerawananwali()
    {
        $data = PetaKerawanan::all();
        return view('dashboard.walikelas.petakerawananwali', compact('data'));
    }

    public function tambahpetakerawananwali()
    {
        $data = Murid::all();
        $dataa = Pelanggaran::all();
        return view('dashboard.walikelas.tambahpetakerawananwali', compact('data', 'dataa'));
    }

    public function insertpetakerawananwali(Request $request)
    {
        PetaKerawanan::create($request->all());
        return redirect()->route('petakerawananwali')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editpetakerawananwali($id)
    {
        $data = PetaKerawanan::find($id);
        $dataa = Pelanggaran::all();
        // dd($data);
        return view('dashboard.walikelas.editpetakerawananwali', compact('data', 'dataa'));
    }

    public function updatepetakerawananwali(Request $request, $id)
    {
        $data = PetaKerawanan::find($id);
        $data->update($request->all());
        return redirect()->route('petakerawananwali')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapuspetakerawananwali(Request $request, $id)
    {
        $row = PetaKerawanan::find($id);
        $row->delete();
        return redirect()->route('petakerawananwali')->with('success', 'Data berhasil dihapuskan!');
    }

    public function bimpelajarwali()
    {
        $data = BimbinganPelajar::all();
        return view('dashboard.walikelas.bimpelajarwali', compact('data'));
    }

    public function detailbimpelajarwali($id)
    {
        $data = BimbinganPelajar::find($id);
        return view('dashboard.walikelas.detailbimpelajarwali', compact('data'));
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

    public function exportpdfwali()
    {
        $data = PetaKerawanan::all();
        view()->share('data', $data);
        $pdf = Pdf::loadView('dashboard.walikelas.petakerawananwalipdf', ['data' => $data]);
        return $pdf->download('petakerawanan.pdf');
    }

    public function exportexcelwali()
    {
        return Excel::download(new PetaKerawananExport, 'petakerawanan.xlsx');
    }
}

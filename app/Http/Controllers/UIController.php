<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Murid;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pelanggaran;
use App\Models\Walikelas;
use Illuminate\Support\Facades\Hash;

class UIController extends Controller
{
    //admin pages
    public function dashboardadmin()
    {
        return view('dashboard.admin.admin');
    }

    public function kelasadmin()
    {
        $row = Kelas::with('guru', 'waliKelas')->get();
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
        $data = Kelas::all();
        return view('dashboard.admin.tambahwalikelas', compact('data'));
    }

    public function insertwalikelas(Request $request)
    {
        $data = User::create([
            'name' => $request->nama_guru,
            'level' => 'walikelas',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $wali = new Walikelas([
            'nama_guru' => $request->nama_guru,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $wali->user_id = $data->id;
        $wali->save();

        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editwalikelas($id)
    {
        $dataa = Kelas::all();
        $data = Walikelas::find($id);
        return view('dashboard.admin.editwalikelas', compact('dataa', 'data'));
    }

    public function updatewalikelas(Request $request, $id)
    {
        $data = Walikelas::find($id);
        $a = User::find($data->user_id);
        // dd($request);
        $a->update([
            'name' => $request->nama_guru,
            'level' => 'walikelas',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $data->update([
            'nama_guru' => $request->nama_guru,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data->update($request->all());
        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapuswalikelas(Request $request, $id)
    {
        $data = WaliKelas::find($id);
        $dataa = User::find($data->user_id);
        $data->delete();
        $dataa->delete();
        return redirect()->route('walikelasadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function guruadmin()
    {
        $row = Guru::all();
        return view('dashboard.admin.guruadmin', compact('row'));
    }

    public function tambahguru()
    {
        $row = Kelas::all();
        return view('dashboard.admin.tambahguru', compact('row'));
    }

    public function insertguru(Request $request)
    {
        $data = User::create([
            'name' => $request->nama_guru,
            'level' => 'guru',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $guru = new Guru([
            'nama_guru' => $request->nama_guru,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $guru->user_id = $data->id;
        $guru->save();

        return redirect()->route('guruadmin')->with('success', 'Data berhasil ditambahkan!');
    }
    public function editguru($id)
    {
        $rowe = Kelas::all();
        $row = Guru::find($id);
        return view('dashboard.admin.editguru', compact('rowe', 'row'));
    }

    public function updateguru(Request $request, $id)
    {
        $row = Guru::find($id);
        $a = User::find($row->user_id);
        // dd($request);
        $a->update([
            'name' => $request->nama_guru,
            'level' => 'guru',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $row->update([
            'nama_guru' => $request->nama_guru,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon,
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $row->update($request->all());
        return redirect()->route('guruadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusguru(Request $request, $id)
    {
        $row = Guru::find($id);
        $rowe = User::find($row->user_id);
        $row->delete();
        $rowe->delete();
        return redirect()->route('guruadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function muridadmin()
    {
        $data = Murid::all();
        return view('dashboard.admin.muridadmin', compact('data'));
    }

    public function tambahmurid()
    {
        $data = Kelas::all();
        return view('dashboard.admin.tambahmurid', compact('data'));
    }

    public function insertmurid(Request $request)
    {
        $data = User::create([
            'name' => $request->nama_siswa,
            'level' => 'murid',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $murid = new Murid([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        $murid->user_id = $data->id;
        $murid->save();
        return redirect()->route('muridadmin')->with('success', 'Data berhasil ditambahkan!');
    }

    public function editmurid($id)
    {
        $dataa = Kelas::all();
        $data = Murid::find($id);
        return view('dashboard.admin.editmurid', compact('dataa', 'data'));
    }

    public function updatemurid(Request $request, $id)
    {
        $data = Murid::find($id);
        $a = User::find($data->user_id);
        // dd($request);
        $a->update([
            'name' => $request->nama_siswa,
            'level' => 'murid',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($data->id);

        $data->update([
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $data->update($request->all());
        return redirect()->route('muridadmin')->with('success', 'Data berhasil diperbarui!');
    }

    public function hapusmurid(Request $request, $id)
    {
        $data = Murid::find($id);
        $dataa = User::find($data->user_id);
        $data->delete();
        $dataa->delete();
        return redirect()->route('muridadmin')->with('success', 'Data berhasil dihapuskan!');
    }

    public function jeniskerawanan()
    {
        $data = Pelanggaran::all();
        return view('dashboard.admin.jeniskerawanan', compact('data'));
    }

    public function tambahjeniskerawanan()
    {
        return view('dashboard.admin.tambahjeniskerawanan');
    }

    public function insertjeniskerawanan(Request $request)
    {
        Pelanggaran::create($request->all());
        return redirect()->route('jeniskerawanan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function hapusjeniskerawanan(Request $request, $id)
    {
        $row = Pelanggaran::find($id);
        $row->delete();
        return redirect()->route('jeniskerawanan')->with('success', 'Data berhasil dihapuskan!');
    }
}

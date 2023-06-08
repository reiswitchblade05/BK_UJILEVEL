<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    // Menyimpan data registrasi


    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Proses otentikasi
    public function postlogin(Request $request)
    {
        
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            // return redirect('/dashboardadmin');
            $request->session()->regenerate();
            $user = Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('/dashboardadmin');
            }else if($user->level == 'murid'){
                return redirect()->intended('/murid');
            }else if($user->level == 'guru'){
                return redirect()->intended('/guru');
            }else if($user->level == 'walikelas'){
                return redirect()->intended('/walikelas');
            }else{
                return back();
            }
        }
    }

    public function logout()
    {
        Auth()->logout();
        Session()->flush();
        return redirect('/');
    }
}

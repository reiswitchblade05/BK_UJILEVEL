<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    //admin pages
    public function dashboardadmin()
    {
        return view('dashboard.admin.admin');
    }

    public function jadwaladmin()
    {
        return view('dashboard.admin.jadwaladmin');
    }

    public function kelasadmin()
    {
        return view('dashboard.admin.kelasadmin');
    }

    public function guruadmin()
    {
        return view('dashboard.admin.guruadmin');
    }

    public function muridadmin()
    {
        return view('dashboard.admin.muridadmin');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard.guru.bimpribadi');
    }

    public function bimsosial()
    {
        return view('dashboard.guru.bimsosial');
    }

    public function petakerawanan()
    {
        return view('dashboard.guru.petakerawanan');
    }

    public function minatkarirguru()
    {
        return view('dashboard.guru.minatkarirguru');
    }
}

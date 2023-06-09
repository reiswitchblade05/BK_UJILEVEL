<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIGuruController extends Controller
{
    public function guru()
    {
        return view('dashboard.guru.guru');
    }
}

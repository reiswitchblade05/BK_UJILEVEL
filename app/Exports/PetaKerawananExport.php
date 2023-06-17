<?php

namespace App\Exports;

use Illuminate\View\View;
use App\Models\PetaKerawanan;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class PetaKerawananExport implements FromView
{
    use Exportable;

    public function view(): View
    {
        $data = PetaKerawanan::all();
        return view('dashboard.guru.petakerawananexcel', compact('data'));
    }
}

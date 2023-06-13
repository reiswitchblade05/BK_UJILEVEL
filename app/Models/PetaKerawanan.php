<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetaKerawanan extends Model
{
    use HasFactory;
    protected $table = "peta_kerawanan";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_siswa', 'pelanggaran'
    ];
}

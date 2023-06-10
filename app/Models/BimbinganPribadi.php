<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganPribadi extends Model
{
    use HasFactory;
    protected $table = "bimbingan_pribadi";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_siswa', 'nipd', 'tema_konseling', 'jadwal_konseling', 'status', 'hasil', 'tindak_lanjut'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganPelajar extends Model
{
    use HasFactory;
    protected $table = "bimbingan_pelajar";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_siswa', 'tema', 'jadwal_siswa', 'status', 'hasil', 'tindak_lanjut'
    ];
}

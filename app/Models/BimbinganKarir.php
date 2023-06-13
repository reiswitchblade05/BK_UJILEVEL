<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganKarir extends Model
{
    use HasFactory;
    protected $table = "bimbingan_karir";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_siswa', 'jadwal_bimbingan', 'jadwal_sosialisasi', 'karir', 'alasan_siswa', 'tujuan_siswa', 'status', 'hasil', 'tindak_lanjut'
    ];
}

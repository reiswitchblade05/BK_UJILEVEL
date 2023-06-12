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
        'nama_siswa', 'jadwal', 'cita-cita', 'alasan_siswa', 'tujuan_siswa', 'status', 'saran'
    ];
}

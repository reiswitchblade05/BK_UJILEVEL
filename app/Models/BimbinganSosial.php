<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganSosial extends Model
{
    use HasFactory;
    protected $table = "bimbingan_sosial";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_siswa', 'kelas', 'jadwal_siswa', 'konflik_permasalahan', 'status', 'hasil', 'tindak_lanjut'
    ];
}

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
        'nama_siswa', 'kelas', 'tema_konseling', 'jadwal_konseling', 'status', 'hasil', 'tindak_lanjut'
    ];

    public function siswa()
    {
        return $this->belongsTo(Murid::class, 'nama_siswa');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas');
    }
}

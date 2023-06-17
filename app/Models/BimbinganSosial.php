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
        'nama_siswa', 'jadwal_siswa', 'konflik_permasalahan', 'komentar', 'status', 'hasil', 'tindak_lanjut'
    ];

    public function siswa()
    {
        return $this->belongsTo(Murid::class, 'nama_siswa');
    }
}

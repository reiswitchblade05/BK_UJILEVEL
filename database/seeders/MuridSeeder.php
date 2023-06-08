<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('murid')->insert([
            'nama_siswa' => 'Rei',
            'kelas' => 'XI PPLG 1',
            'jenis_kelamin' => 'Laki-Laki',
            'nisn' => '12345',
            'tanggal_lahir' => '2005-11-01',
            'email' => 'reiboyot05@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

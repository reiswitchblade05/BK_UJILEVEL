<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert([
            'nama_guru' => 'Bu Caca',
            'kelas' => 'XI PPLG 1',
            'jenis_kelamin' => 'Perempuan',
            'no_telepon' => '12345678',
            'nip' => '999',
            'email' => 'caca@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

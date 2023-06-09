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
            'nama_guru' => 'Pak Ricky',
            'user_id' => '4',
            'kelas' => 'XI PPLG 1',
            'jenis_kelamin' => 'Laki-Laki',
            'no_telepon' => '12345678',
            'nip' => '999',
            'email' => 'gurubk@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WalikelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walikelas')->insert([
            'nama_guru' => 'Bu Aniek',
            'kelas' => 'XI PPLG 1',
            'jenis_kelamin' => 'Perempuan',
            'no_telepon' => '12345',
            'nip' => '666',
            'email' => 'ani@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

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
            'nama_guru' => 'Pak Erraldo',
            'user_id' => '3',
            'jenis_kelamin' => 'Laki-Laki',
            'no_telepon' => '12345',
            'nip' => '666',
            'email' => 'walikelas@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

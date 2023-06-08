<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::create();

        \App\Models\User::create([
            'name' => 'admin',
            'level' => 'admin',
            'email' => 'adminbk@gmail.com',
            'password' => Hash::make(123),
        ]);
        
        \App\Models\User::create([
            'name' => 'Rei',
            'level' => 'murid',
            'email' => 'reiboyot05@gmail.com',
            'password' => Hash::make(123),
        ]);

        \App\Models\User::create([
            'name' => 'Pak Erraldo',
            'level' => 'walikelas',
            'email' => 'walikelas@gmail.com',
            'password' => Hash::make(123),
        ]);
        
        \App\Models\User::create([
            'name' => 'Pak Ricky',
            'level' => 'guru',
            'email' => 'gurubk@gmail.com',
            'password' => Hash::make(123),
        ]);
    }
}

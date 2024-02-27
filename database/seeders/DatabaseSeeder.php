<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'nama_lengkap' => 'Ziqry Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'roles' => 'Admin',
        ]);

        \App\Models\User::create([
            'nama_lengkap' => 'Ziqry Penumpang',
            'username' => 'penumpang',
            'password' => bcrypt('penumpang'),
            'roles' => 'Penumpang',
        ]);

        \App\Models\User::create([
            'nama_lengkap' => 'Ziqry Petugas',
            'username' => 'petugas',
            'password' => bcrypt('petugas'),
            'roles' => 'Petugas',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Dosen Default
        User::updateOrCreate(
            ['email' => 'dosen@celoe.test'],
            [
                'name' => 'Dosen Pengampu',
                'nomor_induk' => '1234567890',
                'password' => Hash::make('password'),
                'role' => 'dosen',
            ]
        );

        // Akun Mahasiswa Default
        User::updateOrCreate(
            ['email' => 'mahasiswa@celoe.test'],
            [
                'name' => 'Mahasiswa Praktikan',
                'nomor_induk' => '1301210001',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
            ]
        );
    }
}
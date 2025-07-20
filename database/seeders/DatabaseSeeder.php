<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ✅ Seed Mahasiswa
        Mahasiswa::insert([
            [
                'nim' => '21101001',
                'nama' => 'Ahmad Ramadhan',
                'jurusan' => 'Teknik Informatika',
                'tanggal_lahir' => '2002-03-15',
                'agama' => 'Islam',
                'email' => 'ahmad.ramadhan@example.com',
                'no_telepon' => '081234567801',
                'tempat_tinggal' => 'Jl. Melati No. 12, Jakarta Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nim' => '21101002',
                'nama' => 'Putri Andini',
                'jurusan' => 'Sistem Informasi',
                'tanggal_lahir' => '2001-06-20',
                'agama' => 'Islam',
                'email' => 'putri.andini@example.com',
                'no_telepon' => '081234567802',
                'tempat_tinggal' => 'Jl. Mawar No. 20, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // ✅ Seed User Login
        User::create([
            'name' => 'Sakinah',
            'email' => 'sakinahsutia@gmail.com',
            'password' => Hash::make('Satu2345'),
        ]);
    }
}

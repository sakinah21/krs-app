<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Jurusan;
use App\Models\Dosen;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahMatkul = MataKuliah::count();
        $jumlahProdi = Jurusan::count();
        $jumlahDosen = Dosen::count();

        // Contoh data dummy, nanti bisa ganti dari DB
        $minatJurusan = ['Teknik Informatika', 'Sistem Informasi', 'Desain Komunikasi Visual', 'Manajemen ', 'Teknologi Informasi', 'Psikologi', 'Ilmu Komunikasi', 'Bahasa Sastra', 'Dokter', 'Arstiek'];
        $minatJumlah  = [42, 57, 53, 75, 50, 72, 66, 64, 34, 80, 55];

        $mahasiswaJurusan = ['Teknik Informatika', 'Sistem Informasi', 'Desain Komunikasi Visual', 'Manajemen ', 'Teknologi Informasi', 'Psikologi', 'Ilmu Komunikasi', 'Bahasa Sastra', 'Dokter', 'Arstiek'];
        $mahasiswaAktif   = [86, 70, 55, 62, 75, 60, 64, 50, 88, 75];


        return view('dashboard', compact(
            'jumlahMahasiswa',
            'jumlahMatkul',
            'jumlahProdi',
            'jumlahDosen',
            'minatJurusan',
            'minatJumlah',
            'mahasiswaJurusan',
            'mahasiswaAktif'
        ));
    }
}


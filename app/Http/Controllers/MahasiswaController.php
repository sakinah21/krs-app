<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Tampilkan daftar mahasiswa dengan fitur pencarian dan urutan berdasarkan NIM.
     */
    
    public function index(Request $request)
    {
        // Mulai query untuk model Mahasiswa
        $query = Mahasiswa::query();

        // Jika terdapat kata kunci pencarian, filter berdasarkan nama atau NIM
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nim', 'like', "%{$search}%");
            });
        }

        // Ambil data mahasiswa yang sudah difilter, diurutkan berdasarkan NIM, dan dipaginasi
        $mahasiswa = $query->orderBy('nim')->paginate(10);

        // Kirim data ke view
        return view('mahasiswa.index', compact('mahasiswa'));
    }
}

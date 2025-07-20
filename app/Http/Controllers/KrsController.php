<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\KRS;
use App\Models\MataKuliah;

class KRSController extends Controller
{
    // Menampilkan form pengisian KRS
    public function create()
    {
        $mata_kuliah = MataKuliah::all();
        return view('krs.create', compact('mata_kuliah'));
    }

    // Simpan data mahasiswa dan relasi mata kuliah
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required',
            'email' => 'required|email',
            'no_telepon' => 'required',
            'tempat_tinggal' => 'required',
            'mata_kuliah_id' => 'required|array',
            'mata_kuliah_id.*' => 'exists:mata_kuliah,id',
        ]);

        // Cek dan buat mahasiswa jika belum ada
        $mahasiswa = Mahasiswa::firstOrCreate(
            ['nim' => $request->nim],
            $request->only([
                'nama', 'jurusan', 'tanggal_lahir', 'agama',
                'email', 'no_telepon', 'tempat_tinggal'
            ])
        );

        // Simpan relasi KRS (hindari duplikasi)
        foreach ($request->mata_kuliah_id as $mkId) {
            KRS::firstOrCreate([
                'mahasiswa_id' => $mahasiswa->id,
                'mata_kuliah_id' => $mkId,
            ]);
        }

        return redirect('/mahasiswa')->with('success', 'Data mahasiswa dan KRS berhasil disimpan.');
    }
}

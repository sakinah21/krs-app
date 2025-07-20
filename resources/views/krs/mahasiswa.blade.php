@extends('layout')

@section('content')
<div class="d-flex justify-content-center">
    <div class="card shadow" style="width: 500px;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Pengisian Data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <form action="/krs" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fakultas</label>
                    <input type="text" name="fakultas" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-control" required>
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">No Telepon</label>
                    <input type="text" name="no_telp" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tempat Tinggal</label>
                    <input type="text" name="tempat_tinggal" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Lanjut Pilih Mata Kuliah</button>
            </form>
        </div>
    </div>
</div>
@ends

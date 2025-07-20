@extends('layouts.app')

@section('title', 'Input Mahasiswa')

@section('content')
<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Form Pengisian Data Mahasiswa</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <input type="text" name="nim" class="form-control mb-2" placeholder="NIM" required>
                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
                <input type="text" name="jurusan" class="form-control mb-2" placeholder="Jurusan" required>
                <input type="text" name="angkatan" class="form-control mb-2" placeholder="Angkatan (cth: 2022)">
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

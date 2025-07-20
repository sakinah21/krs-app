@extends('layouts.app')

@section('title', 'Pengisian KRS')

@section('content')
<div class="container py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">📝 Formulir Pengisian KRS & Data Mahasiswa</h4>
        </div>

        <div class="card-body bg-light">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Oops!</strong> Ada kesalahan dalam pengisian:<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>⚠️ {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<select name="mata_kuliah_id[]" multiple required>
    @foreach ($mata_kuliah as $mk)
        <option value="{{ $mk->id }}">{{ $mk->nama }}</option>
    @endforeach
</select>

            <form action="{{ route('krs.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">👤 Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">🎓 NIM</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">🏫 Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" placeholder="Contoh: Teknik Informatika" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">📅 Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">🙏 Agama</label>
                        <input type="text" name="agama" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">📧 Email</label>
                        <input type="email" name="email" class="form-control" placeholder="contoh@mail.com" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">📞 No Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">🏠 Tempat Tinggal</label>
                    <input type="text" name="tempat_tinggal" class="form-control" placeholder="Contoh: Jl. Kaliurang No. 15, Sleman, Yogyakarta" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">📖 Pilih Mata Kuliah</label>
                    <div class="border rounded p-3 bg-white">
                        @forelse ($mata_kuliah as $mk)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="mata_kuliah_id[]" value="{{ $mk->id }}" id="mk{{ $mk->id }}">
                                <label class="form-check-label" for="mk{{ $mk->id }}">
                                    {{ $mk->nama }} ({{ $mk->sks }} SKS)
                                </label>
                            </div>
                        @empty
                            <p class="text-danger">❗ Belum ada data mata kuliah tersedia.</p>
                        @endforelse
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">
                        💾 Simpan KRS
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

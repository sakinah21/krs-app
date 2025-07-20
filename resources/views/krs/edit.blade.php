@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-3">Edit Data KRS</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('krs.update', $krs->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
            <input type="text" name="nama_mahasiswa" class="form-control" value="{{ $krs->nama_mahasiswa }}" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $krs->nim }}" required>
        </div>

        <div class="mb-3">
            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" value="{{ $krs->mata_kuliah }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

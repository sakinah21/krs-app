@extends('layout')

@section('content')
<div class="container mt-4">
    <h3>Pilih Mata Kuliah</h3>
    <form action="/krs/matkul" method="POST" class="bg-white p-4 border rounded">
        @csrf
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matkuls as $matkul)
                <tr>
                    <td><input type="checkbox" name="matkul[]" value="{{ $matkul->kode }}"></td>
                    <td>{{ $matkul->kode }}</td>
                    <td>{{ $matkul->nama }}</td>
                    <td>{{ $matkul->sks }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Simpan KRS</button>
    </form>
</div>
@endsection

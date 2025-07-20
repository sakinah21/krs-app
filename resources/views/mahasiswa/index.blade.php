@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <h2 class="text-xl font-semibold mb-4">Data Mahasiswa</h2>

    <form method="GET" action="{{ url('/mahasiswa') }}" class="mb-4">
        <input type="text" name="search" placeholder="Cari NIM atau Nama..." class="border p-2 rounded w-1/3">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded ml-2">Cari</button>
    </form>

    <table class="min-w-full border text-sm">
        <thead class="bg-blue-700 text-white">
            <tr>
                <th class="border px-4 py-2">No</th>
                <th class="border px-4 py-2">NIM</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Jurusan</th>
                <th class="border px-4 py-2">Gmail</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $index => $mhs)
            <tr class="bg-white even:bg-gray-100">
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $mhs->nim }}</td>
                <td class="border px-4 py-2">{{ $mhs->nama }}</td>
                <td class="border px-4 py-2">{{ $mhs->jurusan }}</td>
                <td class="border px-4 py-2">{{ $mhs->gmail }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="border px-4 py-2 text-center">Tidak ada data ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $mahasiswa->links() }}
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
<div class="container mx-auto px-4 py-6">

    {{-- Judul Halaman --}}
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-indigo-700">📚 Data Mata Kuliah</h1>
        <p class="text-gray-600">Berikut adalah daftar mata kuliah yang tersedia di sistem KRS.</p>
    </div>

    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="mb-4 px-4 py-3 bg-green-100 text-green-800 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    {{-- Form Pencarian --}}
    <div class="mb-4">
        <form method="GET" action="{{ url('/matakuliah') }}" class="flex items-center gap-2">
            <input type="text" name="search" placeholder="Cari nama atau kode mata kuliah..."
                class="border border-gray-300 p-2 rounded-lg w-1/3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <button type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Cari
            </button>
        </form>
    </div>

    {{-- Tabel Data Mata Kuliah --}}
    <div class="overflow-x-auto bg-white rounded-xl shadow-md border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-indigo-50 text-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold">No</th>
                    <th class="px-4 py-3 text-left font-semibold">Kode</th>
                    <th class="px-4 py-3 text-left font-semibold">Nama Mata Kuliah</th>
                    <th class="px-4 py-3 text-left font-semibold">SKS</th>
                    <th class="px-4 py-3 text-left font-semibold">Semester</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($matakuliah as $index => $mk)
                <tr>
                    <td class="px-4 py-3">{{ $matakuliah->firstItem() + $index }}</td>
                    <td class="px-4 py-3">{{ $mk->kode }}</td>
                    <td class="px-4 py-3">{{ $mk->nama }}</td>
                    <td class="px-4 py-3">{{ $mk->sks }}</td>
                    <td class="px-4 py-3">{{ $mk->semester }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">
                        Tidak ada data mata kuliah ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $matakuliah->links() }}
    </div>

</div>
@endsection

@extends('layouts.app')

@section('title', 'Home - Aplikasi KRS')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Selamat Datang di Aplikasi KRS</h1>

    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h2 class="text-xl font-semibold text-gray-800">📌 Tentang Aplikasi</h2>
        <p class="text-gray-600 mt-2">
            Aplikasi ini digunakan untuk mengelola Kartu Rencana Studi mahasiswa. 
            Anda dapat mengisi KRS, melihat data mata kuliah, serta memantau status mahasiswa secara efisien.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-green-500">
            <h2 class="text-lg font-semibold text-green-800">🎓 Data Mahasiswa</h2>
            <p class="text-gray-600 mt-2">Lihat dan kelola informasi mahasiswa aktif.</p>
            <a href="/mahasiswa" class="mt-4 inline-block text-sm bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Lihat Data</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-blue-500">
            <h2 class="text-lg font-semibold text-blue-800">📚 Data Mata Kuliah</h2>
            <p class="text-gray-600 mt-2">Kelola daftar mata kuliah yang tersedia.</p>
            <a href="/matakuliah" class="mt-4 inline-block text-sm bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lihat Mata Kuliah</a>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition border-l-4 border-yellow-500">
            <h2 class="text-lg font-semibold text-yellow-700">📝 Pengisian KRS</h2>
            <p class="text-gray-600 mt-2">Isi dan pantau Kartu Rencana Studi mahasiswa.</p>
            <a href="/krs" class="mt-4 inline-block text-sm bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Isi KRS</a>
        </div>
    </div>
@endsection

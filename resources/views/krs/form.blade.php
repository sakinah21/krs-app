@extends('layout')

@section('title', 'Pengisian KRS')

@section('content')
<div class="bg-white shadow rounded p-6">
    <h2 class="text-2xl font-bold text-blue-700 mb-4">Form Pengisian KRS</h2>
    <form action="/krs" method="POST">
        @csrf
        <table class="w-full border-separate border-spacing-y-3">
            <tr>
                <td class="w-1/4 font-semibold text-gray-700">NIM</td>
                <td>
                    <input type="text" name="nim" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Nama</td>
                <td>
                    <input type="text" name="nama" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Jurusan</td>
                <td>
                    <input type="text" name="jurusan" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Tanggal Lahir</td>
                <td>
                    <input type="date" name="tgl_lahir" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Agama</td>
                <td>
                    <select name="agama" class="w-full border px-3 py-2 rounded" required>
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Email</td>
                <td>
                    <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">No Telepon</td>
                <td>
                    <input type="text" name="no_telp" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
            <tr>
                <td class="font-semibold text-gray-700">Tempat Tinggal</td>
                <td>
                    <input type="text" name="tempat_tinggal" class="w-full border px-3 py-2 rounded" required>
                </td>
            </tr>
        </table>

        <!-- Tombol di tengah -->
        <div class="mt-4 text-center">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded">
                Lanjut Pilih Mata Kuliah
            </button>
        </div>
    </form>
</div>
@endsection

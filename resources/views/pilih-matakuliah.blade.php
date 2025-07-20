<!DOCTYPE html>
<html>
<head>
    <title>Pilih Mata Kuliah</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; }
        .ambil-btn { background-color: #4CAF50; color: white; border: none; padding: 5px 10px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Pengambilan KRS</h2>
    <p><strong>Tanggal:</strong> {{ now()->format('d M Y H:i') }}</p>
    <p><strong>SKS Terambil:</strong> {{ collect(session('matkul_diambil'))->sum('sks') ?? 0 }}</p>

    @if (session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('ambil.matkul') }}">
        @csrf
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Jadwal</th>
                    <th>Kelas</th>
                    <th>Kapasitas</th>
                    <th>Ambil</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matkul as $i => $m)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $m['dosen'] }}</td>
                        <td>{{ $m['kode'] }} - {{ $m['nama'] }} ({{ $m['sks'] }} SKS)</td>
                        <td>{{ $m['lokasi'] }} <br> Jadwal: {{ $m['jadwal'] }}</td>
                        <td>{{ $m['kelas'] }}</td>
                        <td>{{ $m['kapasitas'] }} Kursi</td>
                        <td><input type="checkbox" name="matkul[]" value="{{ json_encode($m) }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <button class="ambil-btn" type="submit">Ambil Mata Kuliah</button>
    </form>
</body>
</html>

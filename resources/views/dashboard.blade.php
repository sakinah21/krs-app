@extends('layouts.app')

@section('content')
<div class="px-6 py-4">
    <h1 class="text-2xl font-bold mb-6">Dashboard Akademik</h1>

    {{-- Kotak-kotak Info Singkat --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold">Jumlah Mahasiswa</h3>
            <p class="text-2xl">{{ $jumlahMahasiswa }}</p>
        </div>

        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold">Jumlah Mata Kuliah</h3>
            <p class="text-2xl">{{ $jumlahMatkul }}</p>
        </div>

        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold">Program Studi</h3>
            <p class="text-2xl">{{ $jumlahProdi }}</p>
        </div>

        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold">Dosen</h3>
            <p class="text-2xl">{{ $jumlahDosen }}</p>
        </div>
    </div>

    {{-- Grafik Chart.js --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-blue-600 mb-4">🎓 Minat Mata Kuliah per Jurusan</h2>
            <canvas id="minatChart"></canvas>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold text-purple-600 mb-4">📊 Mahasiswa Aktif per Jurusan</h2>
            <canvas id="aktifChart"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const minatLabels = @json($minatJurusan);
    const minatData   = @json($minatJumlah);
    const aktifLabels = @json($mahasiswaJurusan);
    const aktifData   = @json($mahasiswaAktif);

    const pastelColors = [
        '#60a5fa', '#34d399', '#fbbf24', '#f87171',
        '#a78bfa', '#f472b6', '#4ade80', '#38bdf8',
        '#facc15', '#fb7185', '#5eead4', '#818cf8',
        '#e879f9', '#fcd34d', '#fca5a5', '#6ee7b7',
        '#c084fc', '#fda4af', '#bef264', '#4ade80'
    ];

    const commonOptions = {
        responsive: true,
        plugins: {
            legend: { display: false },
            tooltip: {
                backgroundColor: '#fff',
                titleColor: '#000',
                bodyColor: '#000',
                borderColor: '#e5e7eb',
                borderWidth: 1
            }
        },
        scales: {
            x: {
                grid: { color: '#e5e7eb' },
                ticks: {
                    color: '#374151',
                    font: { size: 12 }
                }
            },
            y: {
                beginAtZero: true,
                grid: { color: '#e5e7eb' },
                ticks: {
                    color: '#374151',
                    font: { size: 12 }
                }
            }
        }
    };

    new Chart(document.getElementById('minatChart'), {
        type: 'bar',
        data: {
            labels: minatLabels,
            datasets: [{
                label: 'Minat Mata Kuliah',
                data: minatData,
                backgroundColor: pastelColors.slice(0, minatData.length),
                borderRadius: 10,
                barPercentage: 0.7,
                categoryPercentage: 0.6
            }]
        },
        options: commonOptions
    });

    new Chart(document.getElementById('aktifChart'), {
        type: 'bar',
        data: {
            labels: aktifLabels,
            datasets: [{
                label: 'Mahasiswa Aktif',
                data: aktifData,
                backgroundColor: pastelColors.slice(0, aktifData.length),
                borderRadius: 10,
                barPercentage: 0.7,
                categoryPercentage: 0.6
            }]
        },
        options: commonOptions
    });
</script>
@endsection

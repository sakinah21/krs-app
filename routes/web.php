<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KRSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

// Dashboard hanya untuk user yang sudah login dan terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Semua route ini hanya bisa diakses oleh user yang sudah login
Route::middleware('auth')->group(function () {
    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk halaman KRS
    Route::resource('krs', KrsController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('home');
});



Route::get('/', fn () => view('home'));
Route::get('/dashboard', fn () => view('dashboard'));
Route::get('/krs', fn () => view('krs'));
Route::get('/mahasiswa', fn () => view('mahasiswa'));
Route::get('/settings', fn () => view('settings'));
Route::get('/help', fn () => view('help'));


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Rute lain jika diperlukan
Route::get('/krs', function () {
    return view('krs');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/help', function () {
    return view('help');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::resource('krs', KrsController::class);
Route::get('/', [MahasiswaController::class, 'index']);

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MataKuliahController::class);
Route::resource('krs', KRSController::class);
Route::get('/krs', [KRSController::class, 'index'])->name('krs.index');
Route::post('/krs/storeMahasiswa', [KRSController::class, 'storeMahasiswa'])->name('krs.storeMahasiswa');
Route::post('/krs/storeKRS', [KRSController::class, 'storeKRS'])->name('krs.storeKRS');

Route::get('/krs', [KRSController::class, 'formMahasiswa'])->name('krs.formMahasiswa');
Route::post('/krs/simpan', [KRSController::class, 'simpanMahasiswa'])->name('krs.simpanMahasiswa');

Route::get('/krs', [KrsController::class, 'createMahasiswa']); // form mahasiswa
Route::post('/krs', [KrsController::class, 'storeMahasiswa']); // simpan mahasiswa
Route::get('/krs/matkul', [KrsController::class, 'createMatkul']); // pilih matkul
Route::post('/krs/matkul', [KrsController::class, 'storeMatkul']); // simpan krs

Route::get('/krs', [KrsController::class, 'index'])->name('krs.form');
Route::post('/krs', [KrsController::class, 'store'])->name('krs.store');
Route::get('/krs/matakuliah/{nim}', [KrsController::class, 'pilihMataKuliah'])->name('krs.matakuliah');

Route::get('/krs', [KrsController::class, 'index'])->name('krs.form');
Route::post('/krs', [KrsController::class, 'store'])->name('krs.store');
Route::get('/krs/matakuliah/{nim}', [KrsController::class, 'pilihMataKuliah'])->name('krs.matakuliah');

Route::get('/krs', [KrsController::class, 'index'])->name('krs.form');
Route::post('/krs', [KRSController::class, 'simpanMahasiswa']);

Route::get('/krs/matakuliah/{nim}', [KrsController::class, 'pilihMataKuliah'])->name('krs.matakuliah');
Route::post('/krs/simpan/{nim}', [KrsController::class, 'simpanKrs'])->name('krs.simpan');

Route::get('/krs', [KRSController::class, 'formMahasiswa']);
Route::post('/krs', [KRSController::class, 'simpanMahasiswa']);
Route::get('/krs/pilih', [KRSController::class, 'pilihMataKuliah']);
Route::post('/krs/ambil', [KRSController::class, 'ambilMataKuliah'])->name('ambil.matkul');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/', [MahasiswaController::class, 'index']);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', App\Http\Controllers\MataKuliahController::class);
Route::resource('krs', App\Http\Controllers\KRSController::class);





Route::get('/', [MahasiswaController::class, 'index']); // tampilkan halaman data mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MataKuliahController::class);
Route::resource('krs', KRSController::class);
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/krs/create', [KRSController::class, 'create']);
Route::post('/krs', [KRSController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('krs', KRSController::class);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::get('/', function () {
    return view('welcome');
});
Route::resource('mahasiswa', \App\Http\Controllers\MahasiswaController::class);
Route::get('/krs/create', [KRSController::class, 'create']);
Route::resource('krs', KrsController::class);
Route::resource('mahasiswa', MahasiswaController::class)->middleware('auth');
Route::resource('matakuliah', MataKuliahController::class);

Route::get('/krs', function () {
    return view('krs.form');
});
Route::post('/krs', [App\Http\Controllers\KrsController::class, 'store']);

require __DIR__.'/auth.php';

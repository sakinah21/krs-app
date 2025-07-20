<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
    $table->id();
    $table->string('nim')->unique();
    $table->string('nama');
    $table->string('jurusan');
    $table->date('tanggal_lahir');
    $table->string('agama');
    $table->string('email')->unique();
    $table->string('no_telepon');
    $table->string('tempat_tinggal');
    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};

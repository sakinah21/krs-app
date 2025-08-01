<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('dosens', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nidn')->unique()->nullable(); // Nomor dosen, jika ada
        $table->string('email')->unique()->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};

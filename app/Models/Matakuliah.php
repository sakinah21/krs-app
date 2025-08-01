<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliahs'; // sesuaikan dengan migrasi

    protected $fillable = [
        'kode', 'nama', 'dosen', 'sks', 'kapasitas'
    ];
}

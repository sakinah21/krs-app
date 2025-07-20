<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim', 'nama', 'jurusan', 'tanggal_lahir',
        'agama', 'email', 'no_telepon', 'tempat_tinggal'
    ];

    public function krs()
    {
        return $this->hasMany(KRS::class);
    }
}

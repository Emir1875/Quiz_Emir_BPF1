<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'DataMahasiswa';
    protected $primaryKey = 'NIM';
    protected $fillable = [
        'Nama_Mahasiswa',
        'Jurusan',
        'email',
        'Alamat',
    ];
}

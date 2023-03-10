<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'nim';

    protected $fillable = [
        'nim','nama','umur','Alamat','kota','kelas','jurusan','gender'
    ];
}
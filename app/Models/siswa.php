<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $primaryKey = 'nis';
    protected $fillable = ['nama_siswa', 'jurusan', 'tempat_pkl', 'alamat_pkl'];
}

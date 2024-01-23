<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'tb_siswa';
    protected $primaryKey = 'nik';
    public $timestamps = false;
    protected $fillable = ['nik', 'nama_siswa', 'jurusan', 'nama_tempat_pkl', 'alamat_pkl'];
}

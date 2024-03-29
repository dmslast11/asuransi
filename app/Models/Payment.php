<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = 'id';
    protected $fillable = ['nis','nama_siswa', 'jurusan', 'tanggal', 'jumlah', 'bukti_transaksi', 'status'];
}

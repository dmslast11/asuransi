<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = 'nis';
    protected $fillable = ['nama_siswa', 'jurusan', 'tanggal', 'jumlah', 'bukti_transaksi', 'status'];
}

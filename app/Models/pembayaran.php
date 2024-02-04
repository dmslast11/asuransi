<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = ['nama_siswa','tanggal','jumlah','Gambar_transaksi'];
}

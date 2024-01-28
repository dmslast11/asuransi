<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        return view('pembayaran.index',compact("payment"));
    }

    public function store(Request $request){
        $this->validate($request, [
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'status' => 'required'
        ]);

        $payment = new Payment();

        $payment->nis = $request->input('nis');
        $payment->nama_siswa = $request->input('nama_siswa');
        $payment->jurusan = $request->input('jurusan');
        $payment->tanggal = $request->input('tanggal');
        $payment->jumlah = $request->input('jumlah');

        // Untuk mengunggah gambar, Anda perlu menyimpannya di direktori yang sesuai.
        if($request->hasFile('bukti_transaksi')) {
            $imagePath = $request->file('bukti_transaksi')->store('public/bukti_transaksi');
            $payment->bukti_transaksi = $imagePath;
        }

        $payment->status = $request->input('status');

        $payment->save();

        return redirect('/payment')->with('success', 'Data Berhasil Disimpan');
    }
    
    
    public function destroy(Payment $payment)
    {
        Payment::destroy($payment->nis);
        return redirect('/payment')->with('success', 'Data Telah Dihapus');
    }
    
}

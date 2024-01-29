<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
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
            $image = $request->file('bukti_transaksi')->get();
            $payment->bukti_transaksi = $image;
        }

        $payment->status = $request->input('status');

        $payment->save();

        return redirect('/payment')->with('success', 'Data Berhasil Disimpan');
    }
    
    public function update(Request $request, Payment $payment)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jurusan' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'status' => 'required'
        ]);
        
        // Proses gambar jika ada
        if($request->file('bukti_transaksi')) {
            $validateData['bukti_transaksi'] = $request->file('bukti_transaksi')->store('public/bukti_transaksi');
        }
        
        Payment::where('nis', $payment->id)->update($validateData);
        
        return redirect('/payment')->with('success', 'Data telah diupdate');        
    }
    
    public function destroy(Payment $payment)
    {
        Payment::destroy($payment->nis);
        return redirect('/payment')->with('success', 'Data Telah Dihapus');
    }
    
}

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
        $payment->status = $request->input('status');

        if ($request->hasFile('bukti_transaksi')) {
            $image = $request->file('bukti_transaksi')->store('public/bukti_transaksi');
            $payment->bukti_transaksi = $image;
        } 

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
            'status' => 'required',
        ]);
        
        // Ambil path file image yang lama
        $bukti = $payment->bukti_transaksi;

        // Proses file image jika disediakan
        if ($request->file('bukti_transaksi')) {
            // Hapus file audio yang lama jika ada
            if ($bukti) {
                Storage::delete($bukti);
            }

            // Simpan file audio yang baru
            $validateData['bukti_transaksi'] = $request->file('bukti_transaksi')->store('public/bukti_transaksi');
        }
        
        Payment::where('nis', $payment->nis)->update($validateData);
        
        return redirect('/payment')->with('success', 'Data telah diupdate');        
    }
    
    public function destroy(Payment $payment)
    {
        if (!empty($payment->bukti_transaksi)) {
            Storage::delete('public/bukti_transaksi/' . basename($payment->bukti_transaksi));
        }
    
        // Hapus record dari database
        Payment::destroy($payment->nis);
    
        return redirect('/payment')->with('success', 'Data Berhasil Dihapus');
    }
    
}

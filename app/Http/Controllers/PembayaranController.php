<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran=pembayaran::all();
    return view('pembayaran.index',compact("pembayaran"));
    }

    public function store(Request $request)
    {
        $data_validasi = $request->validate([
            "nama_siswa" => 'required', 
            "tanggal" => 'required',  
            "jumlah" => 'required',
            "Gambar_transaksi" => 'image', 
        ]);
    
        if ($request->hasFile('gambar_transaksi')) {
            // Hapus gambar lama jika ada
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
    
            // Simpan gambar baru
            $data_validasi['Gambar_transaksi'] = $request->file('gambar_transaksi')->store('public/transaksi-images');
        }
    
        $postPembayaran = Pembayaran::create($data_validasi);
    
        return redirect()->route('pembayaran.index');
    }
    
    
    public function create()
    {
        $pembayaran = pembayaran::all();
        return view("pembayaran.create",compact("pembayaran"));
    
    }
    public function destroy(pembayaran $pembayaran)
    {
        
        $pembayaran->delete();
        return redirect()->route('pembayaran.index');
    }
    public function edit(pembayaran $pembayaran)
    {  

        return view("pembayaran.edit")->with([
         
            'pembayaran' => $pembayaran,
          
        ]);
    }
    public function update(Request $request, pembayaran $pembayaran)
    {
        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index');
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Midtrans\Config as MidtransConfig;
use Midtrans\Snap;

class BayarController extends Controller
{
    public function index(){
        $bayar = Payment::all();
        return view('pembayaran.payment', compact('bayar'));
    }
    
    // Fungsi untuk memproses checkout dan mendapatkan token Snap
    public function check(Request $request){
        $request->request->add(['nis'=>$request->nis, 'nama_siswa'=>$request->nama_siswa,'jurusan'=>$request->jurusan,'tanggal'=>$request->tanggal,'jumlah'=>$request->jumlah,'status'=>'Belum Lunas']);
        $payment = Transaksi::create($request->all());

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $payment->id,
                'gross_amount' => $payment->jumlah,
            ),
            'customer_details' => array(
                'fullname' => $request->nama_siswa,
                'nis' => $request->nis,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        
        return view('pembayaran.detail', compact('snapToken', 'payment'));
    }
    

    // public function callback(Request $request){
    //     $serverKey = config('midtrans.server_key');
    //     $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    
    //     if($hashed == $request->signature_key) {
    //         if($request->transaction_status == 'capture') {
    //             $check = Payment::where('nis', $request->order_id)->first();
    //             $check->update(['status' => 'Paid']);
    //         }
    //     }
    // }
}

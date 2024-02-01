<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
        src={{config('midtrans.snap_url')}}
        data-client-key={{config('midtrans.client_key')}}></script>
<!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <h1 class="text-center mb-4">Pesanan</h1>
        <div class="card mx-auto" style="width: 20rem;">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>NIS</td>
                        <td>: {{$payment->nis}}</td>
                    </tr>
                    <tr>
                        <td>Nama Siswa</td>
                        <td>: {{$payment->nama_siswa}}</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>: {{$payment->jurusan}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>: {{$payment->tanggal}}</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>: Rp {{$payment->jumlah}}</td>
                    </tr>
                </table>
                <div class="btn-container">
                    <button type="submit" class="btn btn-primary" id="pay-button">Bayar</button>
                    <a href="#" type="button" class="btn btn-danger" id="back-button">Batal</a>
                </div>
              </div>
          </div>
          <!-- Pindahkan #snap-container ke sini -->
          <div id="snap-container"></div>
    </div>
    
  
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            snap.pay("{{$snapToken}}", {
                onSuccess: function (result) {
                    alert("Pembayaran berhasil!");
                    window.location.href = '/invoice/{{$payment->id}}'
                    console.log(result);
                },
                onPending: function (result) {
                    alert("Menunggu pembayaran!"); console.log(result);
                },
                onError: function (result) {
                    alert("Pembayaran gagal!"); console.log(result);
                },
                onClose: function () {
                    alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                }
            });
        });
    });
</script>


</body>
</html>




















@push('scripts')
<!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
<div id="snap-container" data-snap-token="{{$snapToken}}"></div>

<script type="text/javascript">
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Mengambil nilai Snap Token dari elemen HTML
      var snapToken = document.getElementById('snap-container').getAttribute('data-snap-token');
  
      // Trigger snap popup menggunakan nilai Snap Token yang diambil
      window.snap.embed(snapToken, {
        embedId: 'snap-container',
        onSuccess: function (result) {
          alert("payment success!"); console.log(result);
        },
        onPending: function (result) {
          alert("waiting for your payment!"); console.log(result);
        },
        onError: function (result) {
          alert("payment failed!"); console.log(result);
        },
        onClose: function () {
          alert('you closed the popup without finishing the payment');
        }
      });
    });
</script>  
@endpush
@extends('includes.master')

@section('content')
<h2 class="mb-2 page-title">Pembayaran/Transaksi</h2>
<p class="card-text">Asuransi Kerja</p>

<!-- Your existing HTML code -->
<div class="card-body">
    <!-- table -->
    <table class="table datatables" id="dataTable-1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Jurusan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bayar as $pay)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$pay->nis}}</td>
                <td>{{$pay->nama_siswa}}</td>
                <td>{{$pay->jurusan}}</td>
                <td>{{$pay->tanggal}}</td>
                <td>{{$pay->jumlah}}</td>
                <td>{{$pay->status}}</td>
                <td align="center">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Bayar
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Add modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <!-- Form for adding new data -->
                <form action="/check" method="post">
                    @csrf
                    
                    <!-- NIS -->
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" required>
                        @error('nis')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Nama Siswa -->
                    <div class="form-group">
                        <label for="nama_siswa">Nama Siswa:</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" required>
                        @error('nama_siswa')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Jurusan -->
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Teknik Komputer dan Jaringan</option>
                            <option>Multimedia</option>
                            <option>Animasi</option>
                            <!-- Add more options if needed -->
                        </select>
                    </div>
                    <!-- Tanggal -->
                    <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required>
                        @error('tanggal')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Jumlah -->
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required>
                        @error('jumlah')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Lanjut</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


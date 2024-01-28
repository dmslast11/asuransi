@extends('includes.master')

@section('content')
<h2 class="mb-2 page-title">Data Pembayaran</h2>
<p class="card-text">Asuransi Kerja</p>

<!-- Your existing HTML code -->
<div class="card-body">
    <!-- Add button -->
    <div class="mb-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">
            Add
        </button>
    </div>
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
            <th>Bukti Transaksi</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payment as $pay)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$pay->nis}}</td>
                <td>{{$pay->nama_siswa}}</td>
                <td>{{$pay->jurusan}}</td>
                <td>{{$pay->tanggal}}</td>
                <td>{{$pay->jumlah}}</td>
                <td>{{$pay->bukti_transaksi}}</td>
                <td>{{$pay->status}}</td>
                <td align="center">
                    <div class="btn-group" role="group" aria-label="Action">
                        <form action="{{ route('payment.destroy', ['payment' => $pay->nis]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="d-flex justify-content-center">
                                <a href="#" class="badge btn-primary border-0 btn-sm mx-1 edit-button" data-toggle="modal" data-target="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="badge btn-danger border-0 btn-sm mx-1 show_confirm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </form>
                    </div>
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
                <h5 class="modal-title" id="addModalLabel">Tambah Data Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                <!-- Form for adding new data -->
                <form action="#" method="post" id="addForm">
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
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required>
                        @error('jumlah')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Bukti Transaksi -->
                    <div class="form-group">
                        <label for="bukti_transaksi">Bukti Transaksi:</label>
                        <input type="file" class="form-control-file @error('bukti_transaksi') is-invalid @enderror" id="bukti_transaksi" name="bukti_transaksi" accept="image/*" required>
                        @error('bukti_transaksi')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option>Lunas</option>
                            <option>Belum Lunas</option>
                        </select>
                        @error('status')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
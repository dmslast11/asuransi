@extends('partials.master')

@section('container')
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
@endsection
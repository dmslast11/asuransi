@extends('includes.master')

@section('content')
<div class="content">

    <div class="section-header">
        <h1>Data Pembayaran</h1>
    </div>
    {{-- <div class="section-body">
        dddd
    </div> --}}
</section>

<table id="bootstrap-data-table" class="table table-striped table-bordered">
    <thead> 
        <tr>
            <th>No</th>
            
            <th>Nama Siswa</th>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Bukti Transaksi</th>
           
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pembayaran as $bayar)
        <tr>
            <td>{{$loop->index+1}}</td>
          
            <td>{{$bayar->nama_siswa}}</td>
            <td>{{$bayar->tanggal}}</td>
            <td>{{$bayar->jumlah}}</td>
            <td>{{$bayar->Gambar_transaksi}}</td>
            <td align="center" width="200px">
<div class="btn-group" role="group" aria-label="Action">
    <form action="{{route('pembayaran.destroy',$bayar->id)}}" method="post">
        @csrf
        <div class="d-flex">
<a href="{{ route('pembayaran.edit', $bayar->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i><span class="ml-1">Edit</span></a>
@method('DELETE')
<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-eraser"></i><span class="ml-1">Delete</span></button>
    </div>
</form>
</div>

            </td>
        </tr>
      @endforeach
    </tbody>
</table>

@endsection
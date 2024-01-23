@extends('includes.master')

@section('content')
<div class="content">

    <div class="section-header">
        <h1>Data Siswa</h1>
    </div>
    {{-- <div class="section-body">
        dddd
    </div> --}}
</section>

<table id="bootstrap-data-table" class="table table-striped table-bordered">
    <thead> 
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama Siswa</th>
            <th>Jurusan</th>
            <th>nama Kantor PKL</th>
            <th>Alamat PKL</th>
           
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $siswa)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$siswa->nik}}</td>
            <td>{{$siswa->nama_siswa}}</td>
            <td>{{$siswa->jurusan}}</td>
            <td>{{$siswa->nama_tempat_pkl}}</td>
            <td>{{$siswa->alamat_pkl}}</td>
            <td align="center" width="200px">
<div class="btn-group" role="group" aria-label="Action">
    <form action="{{route('siswa.destroy',$siswa->nik)}}" method="post">
        @csrf
        <div class="d-flex">
<a href="{{ route('siswa.edit', $siswa->nik) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i><span class="ml-1">Edit</span></a>
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
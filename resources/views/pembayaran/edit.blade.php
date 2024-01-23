@extends('includes.master')

@section('content')
<div class="content">
    <div class="section-header">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Membayar</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('pembayaran.update', $pembayaran->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Nama Siswa</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input type="text" name="nama_siswa" value="{{$pembayaran->nama_siswa}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-anchor"></i></div>
                                        <input type="text" name="tanggal" value="{{$pembayaran->tanggal}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Jumlah</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input type="text" name="jumlah" value="{{$pembayaran->jumlah}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label" >Bukti Transaksi</label>
                <div class="col-sm-12 col-md-7">
                <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                <input name="Gambar_transaksi" type="File" value="{{$pembayaran->Gambar_transaksi}}" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            </div>

                            <div class="form-group row mb-4">
                                <div class="col-sm-12 col-md-7 offset-md-3">
                                    <button type="submit" class="fa fa-upload btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

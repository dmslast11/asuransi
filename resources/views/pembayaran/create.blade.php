@extends('includes.master')

@section('content')
<div class="content">
    <div class="section-header">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pembayaran Offline</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pembayaran.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Nama Siswa</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input class="form-control" name="nama_siswa">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Tanggal</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-anchor"></i></div>
                                        <input class="form-control" name="tanggal">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Jumlah</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input class="form-control" name="jumlah">
                                    </div>
                                </div class="form-group  row mb-4">
                            </div>
                            <div>


                            <div class="form-group row mb-4">
                            <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Bukti Transaksi</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="custom-file">
                                        
                                        <input name="Gambar_transaksi" type="file" class="custom-file-input" id="customFile">
                                        <label  class="custom-file-label" for="customFile">Choose File</label>
                                    </div>
                                    </div class="form-group  row mb-4">
                            </div>
                            <div>

                                <div class="col-sm-12 col-md-7 offset-md-3">
                                    <button type="submit" class="fa fa-upload btn btn-primary">Bayar</button>
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

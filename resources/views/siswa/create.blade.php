@extends('includes.master')

@section('content')
<div class="content">
    <div class="section-header">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input class="form-control" name="nik">
                                    </div>
                                </div>
                            </div>

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
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Jurusan</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-anchor"></i></div>
                                        <input class="form-control" name="jurusan">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Nama Kantor PKL</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input class="form-control" name="nama_tempat_pkl">
                                    </div>
                                </div class="form-group  row mb-4">
                            </div>
                            <div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Alamat PKL</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input class="form-control" name="alamat_pkl">
                                    </div>
                                </div class="form-group  row mb-4">
                            </div>
                            <div>


                         

                                <div class="col-sm-12 col-md-7 offset-md-3">
                                    <button type="submit" class="fa fa-upload btn btn-primary">SIMPAN</button>
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

@extends('includes.master')

@section('content')
<div class="content">
    <div class="section-header">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Input Data</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{route('siswa.update', $siswa->nik)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">NIK</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input type="text" name="nik" value="{{$siswa->nik}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Nama Siswa</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-smile-o"></i></div>
                                        <input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Jurusan</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-anchor"></i></div>
                                        <input type="text" name="jurusan" value="{{$siswa->jurusan}}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Nama Kantor PKL</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input type="text" name="nama_tempat_pkl" value="{{$siswa->nama_tempat_pkl}}" class="form-control">
                                    </div>
                                </div class="form-group  row mb-4">
                            </div>
                            <div>

                            <div class="form-group row mb-4">
                                <label class="col-sm-12 col-md-3 col-lg-3 form-control-label">Alamat PKL</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                        <input type="text" name="alamat_pkl" value="{{$siswa->alamat_pkl}}" class="form-control">
                                    </div>
                                </div class="form-group  row mb-4">
                            </div>
                            <div>

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

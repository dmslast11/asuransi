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
                <td>
                    @if($pay->bukti_transaksi)
                        <img src="{{ asset('storage/' . $pay->bukti_transaksi) }}" alt="Bukti Transaksi" style="max-width: 100px; max-height: 100px;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{$pay->status}}</td>
                <td align="center">
                    <div class="btn-group" role="group" aria-label="Action">
                        <form action="{{ route('payment.destroy', ['payment' => $pay->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="d-flex justify-content-center">
                                <a href="#" class="badge btn-primary border-0 btn-sm mx-1 edit-button" data-toggle="modal" data-target="#editModal-{{$pay->id}}">
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
                <form action="#" method="post" id="addForm" enctype="multipart/form-data">
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

                    <!-- Bukti Transaksi -->
                    <div class="form-group">
                        <label for="image-add" class="control-label">Choose Image
                        </label>
                        <img id="imagePreview" src="#" class="img-preview img-fluid mb-3 col-sm-5" alt="Preview" style="max-width: 50%; max-height: 300px; display: none;">
                        <input type="file" class="form-control @error('bukti_transaksi') is-invalid @enderror" id="image-add" name="bukti_transaksi" accept="image/*" onchange="previewImage()">
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

@foreach($payment as $paym)
<!-- Start Modal Edit -->
<!-- Edit Modal -->
<div class="modal fade" id="editModal-{{$paym->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('payment.update', ['payment' => $paym->id]) }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Form for editing data -->
                    @method('PUT')
                    @csrf
                    <input type="hidden" value="{{$paym->id}}" id="id">>
                    <!-- NIS -->
                    <div class="form-group">
                        <label for="nis_edit">NIS:</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis_edit" name="nis" value="{{ $paym->nis }}" readonly>
                        @error('nis')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Nama Siswa -->
                    <div class="form-group">
                        <label for="nama_siswa_edit">Nama Siswa:</label>
                        <input type="text" class="form-control @error('nama_siswa_edit') is-invalid @enderror" id="nama_siswa_edit" name="nama_siswa" value="{{ $paym->nama_siswa }}">
                        @error('nama_siswa')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Jurusan -->
                    <div class="form-group">
                        <label for="jurusan_edit">Jurusan:</label>
                        <select class="form-control" id="jurusan_edit" name="jurusan">
                            <!-- Populate options based on your data -->
                            <option value="Rekayasa Perangkat Lunak" {{ $paym->jurusan == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer dan Jaringan" {{ $paym->jurusan == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                            <option value="Multimedia" {{ $paym->jurusan == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                            <option value="Animasi" {{ $paym->jurusan == 'Animasi' ? 'selected' : '' }}>Animasi</option>
                            <!-- Add more options if needed -->
                        </select>
                    </div>
                     <!-- Tanggal -->
                     <div class="form-group">
                        <label for="tanggal">Tanggal:</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ $pay->tanggal }}">
                        @error('tanggal')
                            <div class="alert alert-danger mt-2" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Jumlah -->
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ $pay->jumlah }}">
                        @error('jumlah')
                            <div class="alert alert-danger mt-2" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Bukti Transaksi -->
                    <div class="form-group">
                        <label for="image-edit" class="control-label"> Choose Image </label>
                        @if($paym->bukti_transaksi)
                            <img id="imgPreview" src="{{ asset('storage/'. $paym->bukti_transaksi) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" alt="Preview" style="max-width: 50%; max-height: 300px;">
                        @else
                            <img id="imgPreview" class="img-preview img-fluid mb-3 col-sm-5" alt="Preview" style="max-width: 50%; max-height: 300px; display: none;">
                        @endif
                    
                        <input type="file" class="form-control @error('bukti_transaksi') is-invalid @enderror" id="image-edit" name="bukti_transaksi" accept="image/*" onchange="previewImagee()">
                        @error('bukti_transaksi')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Status -->
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option value="Lunas" @if($pay->status == 'Lunas') selected @endif>Lunas</option>
                            <option value="Belum Lunas" @if($pay->status == 'Belum Lunas') selected @endif>Belum Lunas</option>
                        </select>
                        @error('status')
                            <div class="alert alert-danger mt-2" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary edit_data">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
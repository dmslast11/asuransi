@extends('includes.master')

@section('content')
<h2 class="mb-2 page-title">Data Siswa [PKL]</h2>
<p class="card-text">Praktek Kerja Lapangan</p>

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
            <th>Tempat PKL</th>
            <th>Alamat PKL</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $sis)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{$sis->nis}}</td>
                <td>{{$sis->nama_siswa}}</td>
                <td>{{$sis->jurusan}}</td>
                <td>{{$sis->tempat_pkl}}</td>
                <td>{{$sis->alamat_pkl}}</td>
                <td align="center">
                    <div class="btn-group" role="group" aria-label="Action">
                        <form action="{{ route('siswa.destroy', ['siswa' => $sis->nis]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="d-flex justify-content-center">
                                <a href="#" class="badge btn-primary border-0 btn-sm mx-1 edit-button" data-toggle="modal" data-target="#editModal-{{$sis->nis}}">
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
                <h5 class="modal-title" id="addModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                    <!-- Tempat PKL -->
                    <div class="form-group">
                        <label for="tempat_pkl">Tempat PKL:</label>
                        <input type="text" class="form-control @error('tempat_pkl') is-invalid @enderror" id="tempat_pkl" name="tempat_pkl" required>
                        @error('tempat_pkl')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Alamat PKL -->
                    <div class="form-group">
                        <label for="alamat_pkl">Alamat PKL:</label>
                        <textarea class="form-control @error('alamat_pkl') is-invalid @enderror" id="alamat_pkl" name="alamat_pkl" rows="3" required></textarea>
                        @error('alamat_pkl')
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

@foreach($siswa as $sw)
<!-- Edit Modal -->
<div class="modal fade" id="editModal-{{ $sw->nis }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('siswa.update', ['siswa' => $sw->nis]) }}" method="POST">
                <div class="modal-body">
                    <!-- Form for editing data -->
                    @method('PUT')
                    @csrf
                    <!-- NIS -->
                    <div class="form-group">
                        <label for="nis">NIS:</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ $sw->nis }}" readonly>
                        @error('nis')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Nama Siswa -->
                    <div class="form-group">
                        <label for="nama_siswa_edit">Nama Siswa:</label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa_edit" name="nama_siswa" value="{{ $sw->nama_siswa }}">
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
                            <option value="Rekayasa Perangkat Lunak" {{ $sw->jurusan == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer dan Jaringan" {{ $sw->jurusan == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                            <option value="Multimedia" {{ $sw->jurusan == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                            <option value="Animasi" {{ $sw->jurusan == 'Animasi' ? 'selected' : '' }}>Animasi</option>
                            <!-- Add more options if needed -->
                        </select>
                    </div>
                    <!-- Tempat PKL -->
                    <div class="form-group">
                        <label for="tempat_pkl_edit">Tempat PKL:</label>
                        <input type="text" class="form-control @error('tempat_pkl') is-invalid @enderror" id="tempat_pkl_edit" name="tempat_pkl" value="{{$sw->tempat_pkl}}">
                        @error('tempat_pkl')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Alamat PKL -->
                    <div class="form-group">
                        <label for="alamat_pkl_edit">Alamat PKL:</label>
                        <textarea class="form-control @error('alamat_pkl') is-invalid @enderror" id="alamat_pkl_edit" name="alamat_pkl" rows="3">{{$sw->alamat_pkl}}</textarea>
                        @error('alamat_pkl')
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary edit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
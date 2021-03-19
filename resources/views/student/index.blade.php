@extends('layout.main')



@section('title', 'Index Mahasiswa')
@extends('layouts.app')

@section('container')
<div class="container">
    <div class="row">
        <h5 class="justify-content-start mt-3">Daftar Mahasiswa</h5>
            <div class="col-9 d-flex justify-content-end">
            <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Tambah</button>
            </div>
            <!-- Modal Create -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form action="/student" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama: </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama.." required>
                    @error('nama')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP: </label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" id="nrp" placeholder="Masukkan NRP.." required>
                    @error('nrp')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email.." required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan: </label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan.." required>
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
            </div>





<!-- <a href="/students/create" class="btn btn-primary">Tambah Data</a> -->
<div class="container">
    <div class="row">
        <div class="col-11">

@if (session('status'))
<div class="alert alert-success mt-4">
{{ session('status')}}
</div>
@endif

<ul class="list-group mt-4">
@foreach( $student as $mhs)
  <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
    {{ $mhs->nama }}
    <a href="/student/{{ $mhs->id }}" class="badge badge-info">Detail</a>
  </li>
@endforeach
</ul>

</div>
</div>
</div>

@endsection
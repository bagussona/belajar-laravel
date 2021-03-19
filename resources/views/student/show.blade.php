@extends('layout.main')
@section('title', 'Show Student')

@extends('layouts.app')

@section('container')
<div class="container">
    <div class="row">
            <div class="col-10 d-flex justify-content-start">
        <h5 class="justify-content-start mt-3">Detail Mahasiswa</h5>
            <!-- Button trigger modal -->
            </div>
            <!-- Modal Create -->
            <div class="modal fade" id="staticBackdropUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Update Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form action="/student/{{ $id->id }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama: </label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama.." value="{{ old('nama', $id['nama']) }}" required>
                    @error('nama')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP: </label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" id="nrp" placeholder="Masukkan NRP.." value="{{ old('nrp', $id['nrp']) }}" required>
                    @error('nrp')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan Email.." value="{{ old('email', $id['email']) }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan: </label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan.." value="{{ old('jurusan', $id['jurusan']) }}" required>
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
            </div>

<div class="container">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $id['nama'] }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $id['nrp'] }}</h6>
    <p class="card-text">{{ $id['email'] }}</p>
    <p class="card-text">{{ $id['jurusan'] }}</p>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdropUpdate">Edit</button>
    <form action="{{ $id['id'] }}" method="post" class='d-inline'>
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/student" class="card-link">kembali</a>
  </div>
</div>

@endsection
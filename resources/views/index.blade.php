
@extends('layout.main')
@section('title', 'Web Programming UNPAS')

@extends('layouts.app')

@section('container')
<div class="container">
<div class="jumbotron mt-3">
  <h1 class="display-4">Hello, there!</h1>
  <p class="lead">This is the landing page area</p>
  <hr class="my-4">
  <h4>I am Proudly present, and welcome to my webpage</h4>
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="/mahasiswa" role="button">Mahasiswa</a>
  <a class="btn btn-primary btn-lg" href="/student" role="button">Students</a>
  <a class="btn btn-primary btn-lg" href="/about" role="button">About me</a>
</div>
</div>

@endsection
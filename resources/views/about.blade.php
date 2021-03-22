@extends('layout.main')

<!-- about -->

@section('title', 'About')

@extends('layouts.app')

@section('container')
<div class="container text-center mt-4">
<div class="jumbotron h-100">
        <h1>About Me</h1>
        <img src="{{ asset('img/awsd-profile.jpg') }}" alt="@bagus_sona" width="23%" class="rounded-circle shadow mt-4">
        <p class="lead mt-4">@bagus_sona</p>
        <p class="lead mt-4">Sedang mempelajari <span class="typewrite" data-period="2000" data-type='[ "Laravel!", "Bootstrap", "Backend Dev"]'>
        <span class="wrap"></span></span> </p>
    </div>
</div>

@endsection
@extends('layouts.master')
 
@section('content')
 
<!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Selamat Datang!</h1>
      <p>Silahkan klik button dibawah ini untuk melakukan pendaftaran PMB Online</p>
      <p><a class="btn btn-primary btn-lg" href="{{ url('pmb') }}" role="button">PMB &raquo;</a></p>
    </div>
  </div>
 
@endsection
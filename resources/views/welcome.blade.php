@extends('layouts.app')
@section('content')
  <style>
    .jumbotron {
      min-height: 100vh;
    }

    img {
      max-height: 150px;
    }
  </style>

  <div class="container d-flex flex-column jumbotron align-items-center justify-content-center text-center">
    <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    <h1 class="my-1">
      Laravel 9
      <span class="fs-6 fw-light text-muted"> - Bootstrap Template</span>
    </h1>
  </div>
@endsection

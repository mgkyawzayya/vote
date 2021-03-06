@extends('layouts.template')
@section('content')
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="/">
            Voting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a href="{{ route('/') }}" class="nav-link">
                <i class="material-icons">home</i>Home
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('/kings') }}" class="nav-link">
                <i class="material-icons">king</i>King
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('/queens') }}" class="nav-link">
                <i class="material-icons">queen</i>Queen
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/ucspkku.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1>King & Queen Voting</h1>
            <h3 class="title text-center">2018 - 19 Fresher Welcome</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
      <h1 class="text-center title">Queen List</h1>
      <hr>
      <div class="container">
          <div class="row">
            @foreach( $queens as $queen)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header card-header-text card-header-primary">
                        <div class="card-text">
                        <h4 class="card-title">{{ $queen->name }}</h4>
                        <h6 class="card-title">No - {{ $queen->no }}</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('/queen/show/' . $queen->id) }}" class="btn btn-success rounded">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
      </div>
  </div>
@endsection
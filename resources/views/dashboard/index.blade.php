@extends('layouts.app')

@section('title', 'Dashboard Page')

@section('content')
  <!-- Header Section -->
  <head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Add Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  </head>

  {{-- <header class="header">
    <nav class="nav">
      <ul>
        <li><a href="{{route('profile.index')}}">Profile</a></li>
        <li><a href="{{route('education.index')}}">Education</a></li>
        <li><a href="{{route('pengalaman.index')}}">Pengalaman</a></li>
        <li><a href="{{route('penghargaan.index')}}">Penghargaan</a></li>
      </ul>
    </nav>
  </header> --}}

  <!-- Main Content Area -->
  <main class="main">
    <div class="container">
      <h1>Selamat datang di halaman depan portofolio ini</h1>
      <p>This is your portofolio, where you can manage your portofolio.</p>
      <!-- Add dashboard widgets or components here -->
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <h2><i class="fas fa-user"></i> Profile</h2>
            <a href="{{route('profile.index')}}" class="btn btn-success">Profile</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <h2><i class="fas fa-graduation-cap"></i> Education</h2>
            <a href="{{route('education.index')}}" class="btn btn-success">Education</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <h2><i class="fas fa-briefcase"></i> Pengalaman</h2>
            <a href="{{route('pengalaman.index')}}" class="btn btn-success">Pengalaman</a>
          </div>
        </div>

        <div class="col-md-4">
            <div class="card">
              <h2><i class="fas fa-trophy"></i> Penghargaan</h2>
              <a href="{{route('penghargaan.index')}}" class="btn btn-success">Penghargaan</a>
            </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Footer Section -->
  {{-- <footer class="footer">
    <p>&copy; 2023 Your Application Name</p>
  </footer> --}}
@endsection

@extends('portofolio.index')

@section('content')

<section id="hero" class="hero section">

    <img src="https://images.unsplash.com/photo-1524312966005-030e396636fd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D" alt="" data-aos="fade-in">

    <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2>Rio Hairul Farizal</h2>
          <p>Saya merupakan Junior Programmer</p>
          <a href="{{url('about')}}" class="btn-get-started">About Me</a>
        </div>
      </div>
    </div>

  </section>
  @endsection

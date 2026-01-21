@extends('layout')

@section('content')


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('asset/img/future-of-electric-vehicle.jpg')}}" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset/img/cvfipng.png')}}" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset/img/10032.jpg')}}" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>



<!-- HERO SECTION -->
<section class="bg-primary text-white text-center p-5 rounded">
    <div class="container">
        <h1 class="display-4 fw-bold">Welcome to Our Laravel Website</h1>
        <p class="lead mt-3">
            We build modern, fast & secure web applications using Laravel
        </p>
        <a href="/services" class="btn btn-light btn-lg mt-3">
            Our Services
        </a>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>About Our Company</h2>
            <p class="text-muted">
                We are a professional web development team specializing in Laravel,
                PHP, Bootstrap and modern web technologies.
            </p>
            <p>
                Our goal is to create clean, scalable and secure applications for businesses.
            </p>
            <a href="/about" class="btn btn-primary">
                Read More
            </a>
        </div>

        <div class="col-md-6 text-center">
            <img src="{{asset('asset/img/10032.jpg')}}"
                 class="img-fluid rounded shadow"
                 alt="About Image">
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="mt-5">
    <div class="text-center mb-4">
        <h2>Our Services</h2>
        <p class="text-muted">What we offer</p>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">
                        Responsive and modern websites using latest technologies.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Laravel Development</h5>
                    <p class="card-text">
                        Secure and scalable Laravel applications & APIs.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <h5 class="card-title">Support & Maintenance</h5>
                    <p class="card-text">
                        Ongoing support, bug fixing and performance optimization.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="bg-dark text-white text-center p-5 mt-5 rounded">
    <h2>Ready to Start Your Project?</h2>
    <p class="lead">
        Contact us today and let's build something great together.
    </p>
    <a href="/contact" class="btn btn-success btn-lg">
        Contact Us
    </a>
</section>


@endsection






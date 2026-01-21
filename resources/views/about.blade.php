@extends('layout')

@section('content')

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Text -->
            <div class="col-md-6 mb-4">
                <h2>Who We Are</h2>
                <p class="text-muted">
                    We are a professional web development company building modern,
                    scalable and secure web applications using Laravel, PHP and
                    Bootstrap.
                </p>
                <p>
                    Our mission is to help businesses grow with technology-driven
                    solutions and clean design.
                </p>
            </div>

            <!-- Image -->
            <div class="col-md-6 mb-4 text-center">
                <img src="{{asset('asset/img/10032.jpg')}}"
                     class="img-fluid about-img shadow"
                     alt="About Image">
            </div>

        </div>
    </div>
</section>


@endsection

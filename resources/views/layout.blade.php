<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Laravel Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
        }
        footer {
            background: #f8f9fa;
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">LaravelSite</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    @yield('content')
</div>

<!-- Footer -->
<footer class="footer pt-5">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-md-4 mb-4">
                <h5 class="mb-3">My Website</h5>
                <p class="text-muted">
                    We build modern, fast and secure websites using
                    Laravel, Bootstrap and modern technologies.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="footer-link">Home</a></li>
                    <li><a href="/about" class="footer-link">About</a></li>
                    <li><a href="/services" class="footer-link">Services</a></li>
                    <li><a href="/contact" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Services</h5>
                <ul class="list-unstyled">
                    <li class="text-muted">Web Development</li>
                    <li class="text-muted">Laravel Projects</li>
                    <li class="text-muted">UI / UX Design</li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3 mb-4">
                <h5 class="mb-3">Contact</h5>
                <p class="text-muted mb-1">📍 India</p>
                <p class="text-muted mb-1">📞 +91 9876543210</p>
                <p class="text-muted mb-1">✉ info@example.com</p>
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="text-center border-top border-secondary pt-3 mt-3">
            <p class="mb-0 text-muted">
                © 2026 My Website. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript -->
<script>
    console.log("Website Loaded Successfully");
</script>

</body>
</html>
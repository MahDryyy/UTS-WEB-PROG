<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            scroll-behavior: smooth;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            z-index: 1;
            width: 100%;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .nav-link:hover {
            color: #ffc107 !important;
        }

        h1, h2, h3 {
            font-weight: 600;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .section-padding {
            padding: 80px 0;
        }
    </style>
</head>
<body style="background-color:powderblue;">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-content">
        <h1 class="display-4" data-aos="fade-down">Hi, I'm Mahdi Jamaludin</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200">A passionate developer sharing my journey</p>
        <a href="#about" class="btn btn-warning btn-lg mt-3" data-aos="zoom-in" data-aos-delay="400">Explore Portfolio</a>
    </div>
</section>

<!-- Main Content -->
<div class="container">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <small>&copy; {{ date('Y') }} Mahdi Jamaludin. All rights reserved.</small>
</footer>

<!-- JS Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>
</html>

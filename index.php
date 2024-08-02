<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata03 Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .hero-section {
            position: relative;
            color: white;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            background: url('https://lh3.googleusercontent.com/p/AF1QipPGsx-FshjFS-QymigAJ0uxddV_LPtPl6lnoFWJ=s1360-w1360-h1020') no-repeat center center;
            background-size: cover;
        }

        .hero-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); 
            z-index: -1; 
        }

        .hero-section h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.5rem;
        }

        .hero-section a {
            margin-top: 20px;
            font-size: 1.2rem;
        }

        .feature {
            text-align: center;
            padding: 20px;
        }

        .login-section {
            background: #f8f9fa;
            padding: 50px 0;
            text-align: center;
        }

        .login-section h2 {
            margin-bottom: 20px;
        }

        .login-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .login-section a {
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div>
        <h1>Welcome to Pariwisata03</h1>
        <p>Get to know the beauty of Kalimantan Selatan.</p>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 feature">
                <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                <h3>Informasi Destinasi Wisata</h3>
                <p>Temukan berbagai destinasi wisata yang menarik di Kalimantan Selatan.</p>
            </div>
            <div class="col-md-6 feature">
                <i class="fas fa-ticket-alt fa-3x mb-3"></i>
                <h3>Pemesanan Tiket Wisata</h3>
                <p>Pesan tiket untuk destinasi wisata pilihan Anda dengan mudah.</p>
            </div>
        </div>
    </div>
</section>

<!-- Login Section -->
<section id="login-section" class="login-section">
    <div class="container">
        <h2>Lanjutkan untuk Menjelajahi</h2>
        <p>Untuk melanjutkan dan mendapatkan informasi lebih lanjut, silakan login terlebih dahulu.</p>
        <a href="login/login.php" class="btn btn-primary btn-lg">Login</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <div class="mb-3">
            <a href="https://www.linkedin.com/in/noor-rizky-permana-965969269/" target="_blank" class="text-white mx-2"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://github.com/Noorrizky" target="_blank" class="text-white mx-2"><i class="fab fa-github fa-2x"></i></a>
        </div>
        <p>&copy; 2024 Noor Rizky Permana. All Rights Reserved.</p>
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>

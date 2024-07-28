<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
            .hero-section {
        position: relative;
        color: white;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://lh3.googleusercontent.com/p/AF1QipPGsx-FshjFS-QymigAJ0uxddV_LPtPl6lnoFWJ=s1360-w1360-h1020') no-repeat center center;
        background-size: cover;
        z-index: -2; /* Ensure this layer is behind the dark overlay */
    }

    .hero-section::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7); /* Dark overlay with 50% opacity */
        z-index: -1; /* Ensure this layer is behind the text but above the image */
    }

    .hero-section h1 {
        font-size: 4rem;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.5rem;
    }

        .feature {
            text-align: center;
            padding: 20px;
        }

    </style>
</head>
<body>

<!-- Hero Section -->
<section class="hero-section">
    <div>
        <h1>Welcome to Pariwisata03</h1>
        <p>Get to know the beauty of Kalimantan Selatan.</p>
        <a href="login/login.php" class="btn btn-primary btn-lg">Learn More</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 feature">
                <i class="fas fa-cogs fa-3x mb-3"></i>
                <h3>Feature One</h3>
                <p>Informasi mengenai destinasi wisata.</p>
            </div>
            <div class="col-md-6 feature">
                <i class="fas fa-lightbulb fa-3x mb-3"></i>
                <h3>Feature Two</h3>
                <p>Pemesanan tiket wisata.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="contact" class="bg-light py-4">
    <div class="container text-center">
        <p>&copy; 2024 Norizna. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liburan</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
      /* Carousel Image Start*/
      .resolusi-gambar-carousel {
        position: relative;
        width: 100%;
        padding-bottom: 26.84%;
      }
      .resolusi-gambar-carousel img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      /* Carousel Image End*/

      /* Card Image Start*/
      .resolusi-gambar-card {
        position: relative;
        width: 100%;
        padding-bottom: 80%;
      }
      .resolusi-gambar-card img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .navbar-custom {
      background-color: #66B2FF;
      font-weight: bold;
      }
      /* Card Image End*/
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    

    <!-- Carousel Start -->
<div
  id="carouselExampleCaptions"
  class="carousel slide carousel-fade"
  data-bs-ride="carousel"
>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <div class="resolusi-gambar-carousel">
        <img
          src="https://img.okezone.com/content/2021/08/04/406/2450521/menikmati-pesona-alam-pegunungan-meratus-melalui-tour-de-loksado-2021-xB4dPK3Ruq.JPG"
          class="d-block w-100"
          alt="..."
        />
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>The Legend of Borneo</h5>
        <!-- <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="?page=beranda">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=daftarPaket">Daftar Paket Wisata</a>
          </li>

          <?php if(!(empty($_SESSION['username']) || empty($_SESSION['password']))) {?>
          <li class="nav-item">
            <a class="nav-link" href="?page=pesanan">Pesanan</a>
          </li>
          <?php }?>

        </ul>

        <ul class="navbar-nav ml-auto">
        <?php if (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="confirmLogout(event)">Logout</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="login/login.php">Login</a>
          </li>
        <?php } ?>
      </ul>
      <script>
        function confirmLogout(event) {
          event.preventDefault();
          if (confirm('Apakah kamu ingin logout?')) {
            window.location.href = 'aksi/logOut.php';
          }
        }
      </script>
      </div>
    </nav>      
    <!-- Navbar End -->

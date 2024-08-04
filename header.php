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
        padding-bottom: 41.84%;
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
      /* Card Image End*/
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand">BORNEO</a>
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

    <!-- Carousel Start -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
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
        <div class="carousel-item" data-bs-interval="4000">
          <div class="resolusi-gambar-carousel">
            <img
              src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcTz24H7DYr1jIBr39a90E_qwGxHNO3ZPMEyq5R4WHXa9XFV9k8zIn4zv98ksnbtY1-w5KiATebb_UB7rCWNW_Vpp8sv8QI-fzJx4vneom4"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>The Legend of Borneo</h5>
            <!-- <p>Some representative placeholder content for the second slide.</p> -->
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <div class="resolusi-gambar-carousel">
            <img
              src="https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcTWQ0xZ7sXbyAG3vDkBS5Kf7QVCjdmBaG9VORg9VLWyJMtUCIB39zn6Qfn5djG9xL4VDu2pQSbltA0ozwrP68_YnqYnhBjWV0vQze27y94"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>The Legend of Borneo</h5>
            <!-- <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel End -->

    

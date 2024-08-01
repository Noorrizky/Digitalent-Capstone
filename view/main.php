<?php
include "../config/koneksi.php";

if ($_GET['page'] == 'beranda') {
    // Ambil data dari database
    $query = "SELECT * FROM pariwisata";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        ?>
        <!-- Beranda Start ------------------------------------------------------------------------------------------------------------->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <a href="<?= $row['link_info'] ?>" target="_blank">
                                        <div class="resolusi-gambar-card">
                                            <img src="<?= $row['gambar'] ?>" class="card-img-top" alt="Gambar <?= $row['nama'] ?>" />
                                        </div>
                                    </a>
                                    <div class="card-body text-center">
                                        <h5 class="card-title"><?= $row['nama'] ?></h5>
                                        <p class="card-text"><?= $row['deskripsi'] ?></p>
                                        <a href="<?= $row['link_video'] ?>" class="btn btn-primary" target="_blank">Informasi Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Video Youtube  -->
                <div class="col-md-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="949" height="534" src="https://www.youtube.com/embed/ojQbArbuN4E" title="Wonderful Indonesia : A Visual Journey" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9" style="margin-top: 20px; margin-bottom: 20px">
                        <iframe width="949" height="534" src="https://www.youtube.com/embed/KAhWQclewoE" title="Video Kreatif BBWI - Desinasi Wisata Unggulan Kalimantan Selatan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Beranda End ------------------------------------------------------------------------------------------------------------->
        <?php
    } else {
        echo "Tidak ada data.";
    }
} elseif ($_GET['page'] == 'daftarPaket') {
    ?>
    <!-- TODO Page Daftar Paket  ------------------------------------------------------------->

    <!-- TODO Page Daftar Paket  ------------------------------------------------------------->
    <?php
} elseif ($_GET['page'] == 'detailPaket') {
    ?>
    <!-- TODO Page Detail Paket  ------------------------------------------------------------->

    <!-- TODO Page Detail Paket  ------------------------------------------------------------->
    <?php
}
?>

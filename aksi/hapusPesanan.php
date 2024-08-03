<?php
    include "../config/koneksi.php";

    $db->query("DELETE FROM daftar_paket WHERE daftar_paket_id = '$_GET[id]' ");
    if (!$db) {
        echo "Ada masalah hapus data = $db->error";
    } else {
        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;'>
            Data Berhasil dihapus.
            <a href='../view/display.php?page=pesanan'>Kembali ke Halaman Pesanan</a>
        </div>";
    }
?>

<?php
include "../config/koneksi.php";

$db->query("
    UPDATE daftar_paket SET
    nama_pemesanan = '$_POST[nama_pemesanan]',
    nomor_hp ='$_POST[nomor_hp]'
    WHERE daftar_paket_id='$_POST[daftar_paket_id]'
");

if(!$db)
    echo "Ada masalah penyimpanan edit data = $db->error";
else
    echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;'>
    Data berhasil diubah.
    <a href='../view/display.php?page=pesanan'>Kembali ke Halaman</a>
    </div>";
?>





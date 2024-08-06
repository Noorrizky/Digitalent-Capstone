<?php
include "../config/koneksi.php";

$pelayanan_paket = implode(",", $_POST['pelayanan_paket']);

$db->query("
    UPDATE daftar_paket SET
    nama_pemesanan = '$_POST[nama_pemesanan]',
    nomor_hp = '$_POST[nomor_hp]',
    tanggal_pesan = '$_POST[tanggal_pesan]',
    pelayanan_paket = '$pelayanan_paket',
    jumlah_hari = '$_POST[jumlah_hari]',
    total_harga_paket = '$_POST[total_harga_paket]',
    jumlah_peserta = '$_POST[jumlah_peserta]',
    total_jumlah_tagihan = '$_POST[total_jumlah_tagihan]'
    WHERE daftar_paket_id = '$_POST[daftar_paket_id]'
");

if(!$db) {
    echo "Ada masalah penyimpanan edit data = $db->error";
} else {
    echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;'>
    Data berhasil diubah.
    <a href='../display.php?page=pesanan'>Kembali ke Halaman</a>
    </div>";
}
?>

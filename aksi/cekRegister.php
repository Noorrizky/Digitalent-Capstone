<?php
include "../config/koneksi.php";

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = md5($password);
$role = 'user';

// Memeriksa apakah username sudah ada
$cek_username = $db->query("SELECT * FROM user WHERE username = '$username'");

if (!$cek_username) {
    echo "Ada masalah: " . $db->error;
    exit();
}

if ($cek_username->num_rows > 0) {
    // Username sudah ada
    echo "Username sudah terdaftar. Silakan gunakan username lain.";
} else {
    // Menyimpan data pengguna baru
    $insert = $db->query("INSERT INTO user (username, password) VALUES ('$username', '$hashed_password')");

    if ($insert) {
        echo "<script>
                alert('Akun berhasil dibuat');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "Ada masalah saat registrasi: " . $db->error;
    }
}
?>

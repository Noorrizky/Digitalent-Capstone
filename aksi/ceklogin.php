<?php
include "../config/koneksi.php";
$pass = md5($_POST['password']);
$hasil = $db->query("SELECT * FROM user WHERE username = '$_POST[username]'");

if (!$hasil) {
    echo "Ada masalah: " . $db->error;
    exit();
}

$d = $hasil->fetch_assoc();

if ($d && $d['password'] == $pass) {
    // Username dan Password Benar
    session_start();
    $_SESSION['username'] = $d['username'];
    $_SESSION['password'] = $pass;
    
    header('location:../view/display.php?page=beranda');
    exit();
} else {
    // Username atau Password Salah
    echo "Username atau Password Anda Salah.";
    exit();
}
?>

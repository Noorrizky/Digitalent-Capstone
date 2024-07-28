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
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Error</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .error-message {
                padding: 20px;
                border: 1px solid #dc3545;
                background-color: #f8d7da;
                color: #721c24;
                border-radius: 5px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .error-message button {
                margin-top: 15px;
                padding: 10px 20px;
                border: none;
                background-color: #007bff;
                color: white;
                border-radius: 5px;
                cursor: pointer;
                font-size: 1rem;
            }
            .error-message button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="error-message">
            <h2>Login Error</h2>
            <p>Username atau Password Anda Salah.</p>
            <button onclick="window.location.href=\'../login/login.php\'">Kembali ke Login</button>
        </div>
    </body>
    </html>';
    exit();
}
?>

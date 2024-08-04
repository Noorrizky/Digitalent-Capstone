<?php
session_start();
error_reporting(E_ALL);

if($_GET['page'] == 'pesanan' && empty($_SESSION['username'])){
    header('Location: loginRequired.php');
}
include 'header.php';
include 'main.php';
include 'footer.php';

?>
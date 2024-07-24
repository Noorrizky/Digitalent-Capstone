<?php
session_start();
error_reporting(E_ALL);
if(empty($_SESSION['username']) || empty($_SESSION['password']) )
{
	echo "Maaf, anda harus login.";
}
else
{
    include 'header.php';
    include 'main.php';
    include 'footer.php';
}
?>
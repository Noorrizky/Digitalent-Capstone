<?php
    $db     = new mysqli("localhost","root","", "digitalent");
    if($db->connect_errno>0)
        echo "Ada masalah dengan Database atau koneksi";
    else{
    }
?>
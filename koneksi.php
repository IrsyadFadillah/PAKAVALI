<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tugasakkhir";

    $koneksi  = mysqli_connect($hostname, $username, $password, $database);

    if(!$koneksi){
        echo "Koneksi Gagal";
    }

?>
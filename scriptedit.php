<?php

    include ("koneksi.php");

    $id = $_POST['id'];
    $Nama_Konservasi = $_POST['Nama_Konservasi'];
    $Status_Konservasi = $_POST['Status_Konservasi'];
    $Titik_Koordinat = $_POST['Titik_Koordinat'];
    $Deskripsi = $_POST['Deskripsi'];

    $query = "UPDATE `konser` set Nama_Konservasi = '$Nama_Konservasi', Status_Konservasi = '$Status_Konservasi', Titik_Koordinat = '$Titik_Koordinat', Deskripsi = '$Deskripsi' where id = $id";

    if(mysqli_query($koneksi, $query)){
        header("location: admin.php");
    }else{
        echo "gagal diedit";
    }
    
?>
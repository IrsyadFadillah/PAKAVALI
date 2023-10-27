
<?php
    
    include ("koneksi.php");

    $Nama_Konservasi = $_POST['Nama_Konservasi'];
    $Status_Konservasi = $_POST['Status_Konservasi'];
    $Titik_Koordinat = $_POST['Titik_Koordinat'];
    $Deskripsi = $_POST['Deskripsi'];

    $query = "INSERT INTO `konser` (`Nama_Konservasi`, `Status_Konservasi`, `Titik_Koordinat`, `Deskripsi`) VALUES ('$Nama_Konservasi','$Status_Konservasi','$Titik_Koordinat','$Deskripsi')";

    if(mysqli_query($koneksi, $query,)){
        header("location: admin.php");
    }else{
        echo "data gagal ditambah";
    }
?>
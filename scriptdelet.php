
<?php
    session_start();
    if(!isset($_SESSION['nama_user'])){
       header("Location: login.php");
    }

    include ("koneksi.php");

    $id = $_GET['id'];


    $query = "delete from konser where id = $id";

    if(mysqli_query($koneksi, $query)){
        header("location: admin.php");
    }else{
        echo "gagal dihapus";
    }
?>


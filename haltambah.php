<?php
  session_start();
  if(!isset($_SESSION['nama_user'])){
    header("Location: login.php");
  }
  include('koneksi.php');

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>ADMIN | Pakavali</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/reef_ocean_nature_diving_coral_icon_209419.ico" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styleadmin.css?v= <?php echo time(); ?>" type="text/css">

  </head>

  <body>

		<!--Awal Navbar-->
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(assets/img/f2.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
          <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Aksi Persebaran Konservasi</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li >
                      <a href="haltambah.php">Tambah Data</a>
                  </li>
                  <li>
                      <a href="Pesebaran.php">Lihat Tampilan User</a>
                  </li>
                </ul>
            </li>
	          <li>
              <a href="scriptlogout.php">Logout</a>
	          </li>
	        </ul>
	      </div>
    	</nav>
      <!--Akhir Navbar-->

      <!--Awal Konten-->
      <div id="content" class="p-4 p-md-5">
      <h2 class="mb-4">Tambah Data</h2>
        <div class="login-content">
            <form action="scriptinsert.php" method="POST">
              <div class="input-div one">
                <div class="div">
                    <label for="Nama_Konservasi">Nama Lokasi Konservasi</label>
                    <input type="text" class="form-control" name="Nama_Konservasi" placeholder="Nama Lokasi Konservasi">
                </div>
              </div>
              <div class="input-div pass">
                <div class="div">
                    <label for="Status_Konservasi">Status Konservasi</label>
                    <input type="text" class="form-control" name="Status_Konservasi" placeholder="Status Konservasi">
                </div>
              </div>
              <div class="input-div pass">
                <div class="div">
                    <label for="Titik_Koordinat">Titik Koordinat</label>
                    <input type="text" class="form-control" name="Titik_Koordinat" placeholder="Titik Koordinat">
                </div>
              </div>
              <div class="input-div pass">
                <div class="div">
                    <label for="Deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" name="Deskripsi" placeholder="Deskripsi">
                </div>
              </div> 
              <br>
              <input type="submit" class="btn-sm btn-primary" value="Simpan" /><br>
              
              </form><br>
              <a href="admin.php"><button class="btn-sm btn-primary">Kembali</button></a>
        </div>
		</div>

    <!--Akhir Konten-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script src="js/scripts.js"></script>
        
  </body>
</html>

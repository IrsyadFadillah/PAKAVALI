<?php
  session_start();
  if(!isset($_SESSION['nama_user'])){
     header("Location: login.php");
  }

  include("koneksi.php");

  $query = "select * from konser";
  $result = mysqli_query($koneksi, $query);  
  

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
  <style>

    html, body{
        height: 100%;
        margin: 0;
    }

    #map{
      height: 300px;
      width: 100%;
      max-width: 100%;
      max height: 100%;
    }

  </style>

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
                  <li>
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
        <h2 class="mb-4">Beranda Admin</h2>
        <div id= "map" style = "width: 100%; height: 600px;"></div>
        <br>
      <div class="container">
        <table class="table table-info table-striped" style = "color: #007EA7; font-size: 12px">
          <thead>
            <tr>
                <th scope="col">ID Data</th>
                <th scope="col">Nama Lokasi Konservasi</th>
                <th scope="col">Status Konservasi</th>
                <th scope="col">Titik Koordinat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Fitur Tambahan</th>
            </tr>  
          </thead>
          <tbody>
          <?php
          $i = 1; 
          if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
              ?>
              <tr>
              <td><?php echo $row["id"]; ?></td>
              <td><?php echo $row["Nama_Konservasi"]; ?></td>
              <td><?php echo $row["Status_Konservasi"]; ?></td>
              <td><?php echo $row["Titik_Koordinat"]; ?></td>
              <td><?php echo $row["Deskripsi"]; ?></td>
              <td>
                  <a href="haledit.php?id=<?php echo $row['id']; ?>" class="btn btn-lg btn-secondary" style = "font-size: 7px">Edit</a> | 
                  <a href="scriptdelet.php?id=<?php echo $row['id']; ?>"class="btn btn-lg btn-warning" style = "font-size: 7px">Delete</a>
              </td>
            </tr>
          <?php
            }
              
          }
          ?>
      </div>
		</div>

    <!--Akhir Konten-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="js/scripts.js"></script>
    <script>
        var petaku = L.map('map').setView([1.850838, 116.654750], 5);

        var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 19,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
        }).addTo(petaku);
        
        <?php
            $query2 = "select * from konser";
            $result2 = mysqli_query($koneksi, $query);  

            if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){

        ?>  
            
        L.marker([<?php echo $row2['Titik_Koordinat'];?>]).addTo(petaku). bindPopup('<?php echo $row2["Nama_Konservasi"];?>');
        L.circle([<?php echo $row2['Titik_Koordinat'];?>], {
          color: 'red',
          fillColor: '#f03',
          fillOpacity: 0.5,
          radius: 60000
        }).addTo(petaku);

        <?php
            }
          }
        ?>
  </script>
  </body>
</html>

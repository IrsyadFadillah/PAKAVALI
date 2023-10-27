    <?php
    session_start();

    include("koneksi.php");

    $query = "select * from konser";
    $result = mysqli_query($koneksi, $query);  
    
    $query2 = "select * from konser";
    $result2 = mysqli_query($koneksi, $query);  

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PAKAVALI | PERSEBARAN KAWASAN KONSERVASI LAUT INDONESIA</title>
        <link rel="icon" type="image/x-icon" href="assets/reef_ocean_nature_diving_coral_icon_209419.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/styles.css?v= <?php echo time(); ?>" type="text/css">

    </head>
    <body id="page-top">
        
        <!--Awal Navbar-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="index.php">PAKAVALI</a></li>
                <li class="sidebar-nav-item"><a href="index.php">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">Peta Persebaran</a></li>
                <li class="sidebar-nav-item">
                    <a href="#2Menu">Project</a>
                    <ul>
                        <li class="sidebar-nav-item"><a href="biola.php">Biola</a></li>
                        <li class="sidebar-nav-item"><a href="Pesebaran.php">Peta Persebaran</a></li>
                    </ul>
                </li>
                <br>
                <div class="border-top"><br>
                    <li class="sidebar-nav-item"><a href="login.php">Login Admin</a></li>
                </div>
            </ul>
        </nav>
        <!--Akhir Navbar-->

        <!--Awal Header-->
        <section class="content-section bg-primary text-white text-center">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h2 class="mb-1">PETA PERSEBARAN</h2>
                    <p>Penjelasan mengenai persebaran kawasan konsevasi laut indonesia</p>
                </div>
            </div>
        </section>
        <!--Akhir Header-->

        <!--Awal Konten-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <div id= "map" style = "width: 100%; height: 600px;"></div>
                        
                        <table class="table table-hover lead mb-5 text-center" style="width:100%"><br>
                        <thead>
                            <tr>
                                <th style="text-align:center">ID</th>
                                <th style="text-align:center">Nama Konservasi</th>
                                <th style="text-align:center">Status Konservasi</th>
                                <th style="text-align:center">Titik Koordinat</th>
                                <th style="text-align:center">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr >
                                <th style="text-align:center" scope="row"><?php echo $i; $i++; ?></th>
                                <td style="text-align:center"><?php echo $row["Nama_Konservasi"]; ?></td>
                                <td style="text-align:center"><?php echo $row["Status_Konservasi"]; ?></td>
                                <td style="text-align:center"><?php echo $row["Titik_Koordinat"]; ?></td>
                                <td style="text-align:center"><?php echo $row["Deskripsi"]; ?></td>
                            </tr>
                        <?php
                        }

                                }
                        ?>
                        </tbody>
                        </table>
                        

                    </div>
                </div>
            </div>
        </section>
       <!--Akhir Konten-->

       <!--Awal Footer-->
        <footer class="footer-20192">
            <div class="site-section">
              <div class="container">
      
                <div class="cta d-block d-md-flex align-items-center px-5">
                  <div>
                    <h3 class="mb-0">PAKAVALI | Persebaran Kawasan Konservasi Laut Indonesia</h3>
                  </div>
                </div>
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div>
                                <div class="card-body text-center">
                                    <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Address</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="https://goo.gl/maps/7VYYy3BZdcCDvKTK8">Jl. Ciracas No.38, Serang...</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div>
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Email</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href = "mailto: irsyadfadillah@upi.edu">irsyadfadillah@upi.edu</a></div>
                                    <div class="small text-black-50"><a href = "mailto: ziyan_a.t@upi.edu">ziyan_a.t@upi.edu</a></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div>
                                <div class="card-body text-center">
                                    <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Phone</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-50"><a href="https://t.me/irsfadill">t.me/irsfadill</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </footer>
        <!--Akhir Footer-->

        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

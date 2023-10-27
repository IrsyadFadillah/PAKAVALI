<?php
    session_start();
    if(isset($_SESSION['nama_user'])){
        header ("Location: admin.php");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>PAKAVALI | PERSEBARAN KAWASAN KONSERVASI LAUT INDONESIA</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link rel="icon" type="image/x-icon" href="assets/reef_ocean_nature_diving_coral_icon_209419.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/login.css?v= <?php echo time(); ?>" type="text/css">

  </head>
  <body>

    <!--Awal Form-->
    <div class="container">
        <div class="img">
            <img src="assets/img/f2.jpg" />
        </div>
        <div class="login-content">
            <form action="scriptlogin.php" method="post">
            <h2>Login Admin</h2>
            <div class="input-div one">
                <div class="i">
                <i class="fas fa-user"></i>
                </div>
                <div class="div">
                <h5>Username</h5>
                <input type="text" class="input" name="nama_user"/>
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                <h5>Password</h5>
                <input type="password" class="input" name="password_user"/>
                </div>
            </div>
            <input type="submit" class="btn" value="login" />
            <a class="text-center" href="index.php">Kembali</a>
            </form>
        </div>
    </div>
    <!--Akhir Form-->

    <script type="text/javascript" src="js/login.js"></script>
  </body>
</html>
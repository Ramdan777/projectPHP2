<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Login Sistem Informasi Nilai">
  <meta name="author" content="">
  <meta name="keyword" content="">

  <title>Sistem Informasi Nilai Siswa</title>

  <!-- pemanggilan direktory file bootstrap.css -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- pemanggilan direktory file css font-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- pemanggilan direktori file css custom template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    body {
      background-image: url(bgsiswa.jpg);
    }
  </style>
</head>

<body>

  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

  <div id="login-page">
    <div class="container">

      <form class="form-login" method="post" action="">
        <h2 class="form-login-heading"> <span class="glyphicon glyphicon-lock"></span> LOGIN ADMIN</h2>
        <center>
          <h5> <span class="glyphicon glyphicon-qrcode"></span> Sistem Informasi Nilai Siswa <span class="glyphicon glyphicon-qrcode"></span></h5>
        </center>
        <div class="login-wrap">
          <input name="username" id="username" type="input" class="form-control" autocomplete="off" placeholder="Masukan Username" required autofocus>
          <br />
          <input name="password" id="password" type="password" class="form-control" autocomplete="off" placeholder="Masukan Password" required>
          <br />
          <button class="btn btn-lg btn-info btn-block" type="submit" name="proseslog">Sign in</button>
          <hr>
          <div class="login-social-link centered">
            <p>atau login sebagai </p>
            <a href="login-siswa.php" class="btn btn-success" type="submit"><i class="fa fa-user"></i> Siswa</a>
            <a href="login-guru.php" class="btn btn-warning" type="submit"><i class="fa fa-user"></i> Guru</a>
          </div>
          <div class="registration">
               <a class="">
                     Copyright &copy; Ramdan Ramadani XI RPL
               </a>
           </div>
        </div>

      </form>

    </div>
  </div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  <!-- Pemanggilan Background Login Form-->
  <script>
    $.backstretch("bgsiswa.jpg", {
      speed: 500
    });
  </script>


</body>

</html>

<?php
if(isset($_POST['proseslog'])) {
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0 ) {
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='admin.php'>";
    } else{
        echo "<p align=center><b> Username atau Password Salah</b></p>";
        echo "<meta http-equiv=refresh content=1;URL='login-admin.php'>";
    }
}

?>
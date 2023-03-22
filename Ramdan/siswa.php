<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>UjianPraktikPPL</title>
    <style>
    body {
      background-image: url(well.jpg);
      background-size: cover;
      margin: auto;
    }
  </style>
  </head>
  <body>
    <div class="container">
        <p></p>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
            <a type="button" class="btn btn-secondary" href="nilai_siswa.siswa.php" style="margin-left:5px;">NILAI SISWA</a>
            <a type="button" class="btn btn-secondary" href="galeri-siswa.php" style="margin-left:5px;">GALERI</a>         
    </div>
    </div>
    <form>
         <a type="button" class="btn btn-danger" href="home.siswa.php" style="margin-left:5px;">Log out</a>
    </form>  
  </div>
</nav>
<?php
include "session.siswa.php";
include "koneksi.php";
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>


  </body>
</html>

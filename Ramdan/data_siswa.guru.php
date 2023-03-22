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
  </head>
  <body>
  <link rel="stylesheet" href="ini.css">
    <div class="container">
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<b>Data berhasil di input.</b>";
		}else if($pesan == "update"){
			echo "<b>Data berhasil di update.</b>";
		}else if($pesan == "hapus"){
			echo "<b>Data berhasil di hapus.</b>";
		}
	}

  if(isset($_GET['Search'])){
    $Search = $_GET['Search'];
    echo "<b>Hasil pencarian : ".$Search."</b>";
  }
	?>
  <p></p>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="guru.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
            <a type="button" class="btn btn-secondary" href="" style="margin-left:5px;">DATA SISWA</a>
            <a type="button" class="btn btn-secondary" href="nilai_siswa.guru.php" style="margin-left:5px;">NILAI SISWA</a> 
    </div>
    </div>
    <form action="data_siswa.guru.php" method="get">
	        <label style="margin-left:5px;">Search :</label>
	        <input type="text" name="Search" style="margin-left:5px;">
	        <input type="submit" value="Search" style="margin-left:2px;">
    </form>
  </div>
</nav>
<hr>
      <table class="table table-striped table-bordered">
        <tr>
          <th>No.</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Tanggal Lahir</th>
        </tr>
        <?php
        //koneksi
        include "koneksi.php";
        if(isset($_GET['Search'])){
          $Search = $_GET['Search'];
          $tampil = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama like '%".$Search."%'");
        }else{
          $tampil = mysqli_query($koneksi, "SELECT * FROM siswa") ;
        }
        $nomor = 1;
        while ($data = mysqli_fetch_array($tampil)):
          ?>
            <tr>
            <td><?php echo $nomor++; ?></td>
                <td><?= $data['nisn']?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['kelas']?></td>
                <td><?= $data['tanggal_lahir']?></td>
            </tr>

          <?php endwhile; ?>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>


  </body>
</html>

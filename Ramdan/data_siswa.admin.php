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
    <a class="navbar-brand" href="admin.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
            <a type="button" class="btn btn-secondary" href="" style="margin-left:5px;">DATA SISWA</a>
            <a type="button" class="btn btn-secondary" href="data_guru.php" style="margin-left:5px;">DATA GURU</a>
            <a type="button" class="btn btn-secondary" href="nilai_siswa.admin.php" style="margin-left:5px;">NILAI SISWA</a> 
    </div>
    </div>
    <form action="data_siswa.admin.php" method="get">
	        <label style="margin-left:5px;">Search :</label>
	        <input type="text" name="Search" style="margin-left:5px;">
	        <input type="submit" value="Search" style="margin-left:2px;">
      <a type="button" class="btn btn-secondary" href="input.data-siswa.admin.php" style="margin-left:5px;">+_Tambah Data Baru</a>
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
          <th>Pengaturan</th>
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
                <td>
				        <a type="button" class="edit btn btn-warning"  href="edit.data-siswa.php?nisn=<?php echo $data['nisn']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-medical" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v.634l.549-.317a.5.5 0 1 1 .5.866L9 6l.549.317a.5.5 0 1 1-.5.866L8.5 6.866V7.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L7 6l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V4.5A.5.5 0 0 1 8 4zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg></a> |
				        <a type="button" class="hapus btn btn-danger" href="hapus.php?nisn=<?php echo $data['nisn']; ?>" onclick="return confirm('Yakin akan menghapus data?');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>				
			          </td>
            </tr>

          <?php endwhile; ?>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>


  </body>
</html>

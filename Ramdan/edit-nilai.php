<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$mapel = $_POST['mapel'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
 
mysqli_query($koneksi, "UPDATE nilai SET nisn='$nisn', nama='$nama', kelas='$kelas', mapel='$mapel', nilai1='$nilai1', nilai2='$nilai2'  WHERE nisn='$nisn'");
 
header("location:nilai_siswa.admin.php?pesan=update");
?>
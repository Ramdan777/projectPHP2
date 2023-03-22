<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$mapel = $_POST['mapel'];
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO nilai VALUES('','$nisn','$nama','$kelas','$mapel','$nilai1','$nilai2')");
 
// mengalihkan halaman kembali ke index.php
header("location:nilai_siswa.admin.php?pesan=input");
 
?>
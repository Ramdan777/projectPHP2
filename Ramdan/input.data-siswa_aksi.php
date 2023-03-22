<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$tanggal_lahir = $_POST['tanggal_lahir'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO siswa VALUES('$nisn','$nama','$kelas','$tanggal_lahir')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_siswa.admin.php?pesan=input");
 
?>
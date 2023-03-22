<?php 
// isi nama host, username mysql, dan password mysql anda
$koneksi = mysqli_connect("localhost","root","");
 
// isikan dengan nama database yang akan di hubungkan
$dbnilai_ramdan = mysqli_select_db($koneksi, "dbnilai_ramdan");
 
?>

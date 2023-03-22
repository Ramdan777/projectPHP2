<?php 
include 'koneksi.php';
$nisn = $_GET['nisn'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn='$nisn'")or die(mysqli_error($koneksi));
 
header("location:data_siswa.admin.php?pesan=hapus");
?>
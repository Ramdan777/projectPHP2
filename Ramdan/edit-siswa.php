<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$tanggal_lahir = $_POST['tanggal_lahir'];
 
mysqli_query($koneksi, "UPDATE siswa SET nisn='$nisn', nama='$nama', kelas='$kelas', tanggal_lahir='$tanggal_lahir' WHERE nisn='$nisn'");
 
header("location:data_siswa.admin.php?pesan=update");
?>
<?php 
 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$kode = $_POST['kode'];
 
mysqli_query($koneksi, "UPDATE guru SET nama='$nama', jabatan='$jabatan', kode='$kode' WHERE nip='$nip'");
 
header("location:data_guru.php?pesan=update");
?>
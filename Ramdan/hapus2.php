<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM nilai WHERE id='$id'")or die(mysqli_error($koneksi));
 
header("location:nilai_siswa.admin.php?pesan=hapus2");
?>



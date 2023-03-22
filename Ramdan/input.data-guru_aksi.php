<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$kode = $_POST['kode'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO guru VALUES('$nip','$nama','$jabatan','$kode')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_guru.php?pesan=input");
 
?>
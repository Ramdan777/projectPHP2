
<?php
/* Fungsi Konversi nilai ke huruf */
/* Created by Daniel Ok */

function grade($nilai)
{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}
?>
<?php
include 'koneksi.php';
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $mapel = $_POST['mapel'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    //rumus perhitungan nilai
    $nilai  = ($nilai1*0.1)+($nilai2*0.2)+($nilai3*0.3);
    $grade  = grade($nilai);
?>
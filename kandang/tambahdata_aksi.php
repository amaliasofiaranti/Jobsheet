<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_peternak = $_POST['kd_peternak'];
$tgl = $_POST['tgl'];
$waktu = $_POST['waktu'];
$suhu_1 = $_POST['suhu_1'];
$kelembapan_1 = $_POST['kelembapan_1'];
$suhu_2 = $_POST['suhu_2'];
$kelembapan_2 = $_POST['kelembapan_2'];
$suhu_2 = $_POST['suhu_3'];
$kelembapan_3 = $_POST['kelembapan_3'];
$jml_ayam = $_POST['jml_ayam'];
$foto_ayam = $POST['foto_ayam'];
// menginput data ke database
mysqli_query($koneksi,"insert into kondisi_kandang values('','$kd_peternak','$tgl','$waktu','$suhu_1','$kelembapan_1','$suhu_2','$kelembapan_2','$suhu_3','$kelembapan_3','$jml_ayam','$foto_ayam')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
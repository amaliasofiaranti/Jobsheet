<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kd_peternak = $_POST['kd_peternak'];
$kd_penjual = $_POST['kd_penjual'];
$tgl = $_POST['tgl'];
$waktu = $_POST['waktu'];
$jml = $_POST['jml'];
$harga = $_POST['harga'];
$total = $_POST['total']; 
// menginput data ke database
mysqli_query($koneksi,"update kondisi_kandang set kd_peternak='$kd_peternak',tgl='$tgl',waktu='$waktu',suhu_1='$suhu_1',kelembapan_1='$kelembapan_1',suhu_2='$suhu_2',kelembapan_2='$kelembapan_2',suhu_3='$suhu_3',kelembapan_3='$kelembapan_3',jml_ayam='$jml_ayam')
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_peternak = $_POST['kd_peternak'];
$kd_penjual = $_POST['kd_penjual'];
$tgl = $_POST['tgl'];
$waktu = $_POST['waktu'];
$jml = $_POST['jml'];
$harga = $_POST['harga'];
$total = $_POST['total']; 
// menginput data ke database
mysqli_query($koneksi,"insert into transaksi values('','$kd_peternak','$kd_penjual','$tgl','$waktu','$jml','$harga','$total')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
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

// update data ke database
mysqli_query($koneksi,"update transaksi set kd_peternak='$kd_peternak', kd_penjual='$kd_penjual', tgl='$tgl', waktu='$waktu', jml='$jml', harga='$harga', total='$total' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>
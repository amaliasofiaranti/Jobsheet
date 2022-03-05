<?php
//koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$id_grup = $_POST['id_grup'];
$nama = $_POST['nama'];
$alamat = $_POST['amalat'];
$kota = $_POST['kota'];
$tlp = $_POST['tlp'];
$email = $_POST['email'];
$last_login = $_POST['last_login'];
$create_login = $_POST['create_login'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
// menginput data ke database
mysqli_query($koneksi, "insert into login values('', '$username', '$password', '$id_grup', '$nama', '$alamat', '$kota', '$tlp','$email','$last_login','$create_login','$stok','$harga')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
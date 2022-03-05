<?php
// koneksi database
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

// update data ke database
mysqli_query($koneksi, "update login set username='$username', pass='$password', id_grup='$id_grup', nama='$nama', alamat='$alamat', kota='$kota', tlp='$tlp', email='$email', last_login='$last_login', create_login='$create_login', stok='$stok', harga='$harga'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
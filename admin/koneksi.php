<?php 
$koneksi = mysqli_connect("localhost","user_peternakan","","peternakan_ayam");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
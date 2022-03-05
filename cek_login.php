<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from login where username='$username' and pass=('$password')");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$login = mysqli_fetch_assoc($data);

	// cek jika user login sebagai admin
	if($login['id_grup']=="penjual"){
	
	//buat session login dan user
	$_SESSION['username'] = $username;
	$_SESSION['id_grup'] = "penjual";

	//alihkan ke halaman dashboard admin
	header("location:transaksi/index.php");

	//cek jika user login sebagai pegawai
	}else if($login['id_grup']=="peternak"){
		// buat session login dan user
		$_SESSION['username'] = $username;
		$_SESSION['id_grup'] = "peternak";
		// alihkan ke halaman dashboard pegawai

		header("location:kandang/index.php");
	
	}else if($login['id_grup']=="admin"){
			// buat session login dan user
			$_SESSION['username'] = $username;
			$_SESSION['id_grup'] = "admin";
			// alihkan ke halaman dashboard pegawai
	
			header("location:admin/home.php");
	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
	}else{
	header("location:index.php?pesan=gagal");
	}
?>	
	
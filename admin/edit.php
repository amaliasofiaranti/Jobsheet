<!DOCTYPE html>
<html>
<head>
<title>Edit Data Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<div class="panel panel-success">
    <div class="panel-heading">EDIT DATA lOGIN</div>
    <div class="panel-body">

    <?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from login where id='$id'");
while($d = mysqli_fetch_array($data)){
		?>

	<form method="post" action="update.php">
		<table>
			<tr>			
				<td>Username</td>
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="number" name="password"></td>
			</tr>
            <tr>			
				<td>Id Grup</td>
				<td><input type="text" name="id_grup"></td>
			</tr>
            <tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td>Kota</td>
				<td><input type="text" name="kota"></td>
			</tr>
            <tr>
				<td>Telpon</td>
				<td><input type="number" name="tlp"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
            <tr>
				<td>Last Login</td>
				<td><input type="datetime" name="last_login"></td>
			</tr>
			<tr>
				<td>Create Login</td>
				<td><input type="datetime" name="create_login"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok"></td>
			</tr>
            <tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
    <?php
    }
    ?>

</body>
</html>
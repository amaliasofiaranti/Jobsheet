<!DOCTYPE html>
<html>
<head>
<title>Edit Transaksi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Transaksi</h2>
	<br/>
	<a href="home.php">KEMBALI</a>
	<br/>
	<br/>
	<div class="panel panel-success">
    <div class="panel-heading">EDIT TRANSAKSI</div>
    <div class="panel-body">
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from transaksi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update_trans.php">
			<table>
				<tr>			
					<td>Nama Peternak</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kd_peternak" value="<?php echo $d['kd_peternak']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Penjual</td>
					<td><input type="text" name="kd_penjual" value="<?php echo $d['kd_penjual']; ?>"></td>
				</tr>
                <tr>
					<td>Tanggal</td>
					<td><input type="date" name="tgl" value="<?php echo $d['tgl']; ?>"></td>
				</tr>
				<tr>
					<td>Waktu</td>
					<td><input type="time" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
				</tr>
                <tr>
					<td>Jumlah</td>
					<td><input type="number" name="jml" value="<?php echo $d['jml']; ?>"></td>
				</tr>
                <tr>
					<td>Harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td><input type="number" name="total" value="<?php echo $d['total']; ?>"></td>
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
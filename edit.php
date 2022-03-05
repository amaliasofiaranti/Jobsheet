<!DOCTYPE html>
<html>
<head>
	<title>Edit Transaksi</title>
</head>
<body>

	<h2>Transaksi</h2>
	<br/>
	<a href="view_transaksi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT Transaksi</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from transaksi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
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
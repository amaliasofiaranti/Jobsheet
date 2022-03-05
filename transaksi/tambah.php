<!DOCTYPE html>
<html>
<head>
	<title>Tambah Transaksi</title>
</head>
<body>
 
	<h2>Transaksi</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Transaski</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Peternak</td>
				<td><input type="text" name="kd_peternak"></td>
			</tr>
			<tr>
				<td>Nama Penjual</td>
				<td><input type="text" name="kd_penjual"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tgl"></td>
			</tr>
            <tr>			
				<td>Waktu</td>
				<td><input type="time" name="waktu"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="number" name="jml"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
            <tr>
				<td>Total</td>
				<td><input type="number" name="total"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<h2>Data Transaksi</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<div class="panel panel-success">
    <div class="panel-heading">TAMBAH DATA TRANSAKSI</div>
    <div class="panel-body">
	<form method="post" action="tambah_trans_aksi.php">
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
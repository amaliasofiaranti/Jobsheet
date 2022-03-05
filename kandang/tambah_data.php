<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
 
	<h2>Kondisi kandang</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA KONDISI KANDANG</h3>
	<form method="post" action="tambahdata_aksi.php">
		<table>
			<tr>			
				<td>Nama Peternak</td>
				<td><input type="text" name="kd_peternak"></td>
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
				<td>suhu 1</td>
				<td><input type="number" name="suhu_1"></td>
			</tr>
            <tr>
				<td>kelembapan 1</td>
				<td><input type="number" name="kelembapan_1"></td>
			</tr>
            <tr>
				<td>suhu 2</td>
				<td><input type="number" name="suhu_2"></td>
			</tr>
            <tr>
				<td>kelembapan 2</td>
				<td><input type="number" name="kelembapan_2"></td>
			</tr>
            <tr>
				<td>suhu 3</td>
				<td><input type="number" name="suhu_3"></td>
			</tr>
            <tr>
				<td>kelembapan 3</td>
				<td><input type="number" name="kelembapan_3"></td>
			</tr>
			<tr>
				<td>Jumlah Ayam</td>
				<td><input type="number" name="jml_ayam"></td>
			</tr>
			<tr>
				<td>Foto Ayam</td>
				<td><input type="text" name="foto_ayam"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
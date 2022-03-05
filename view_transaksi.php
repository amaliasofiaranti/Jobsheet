<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
</head>
<body>
 
	<h2>Transaski Penjualan</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Peternak</th>
			<th>Nama Penjual</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from transaksi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['kd_peternak']; ?></td>
				<td><?php echo $d['kd_penjual']; ?></td>
				<td><?php echo $d['tgl']; ?></td>
				<td><?php echo $d['waktu']; ?></td>
				<td><?php echo $d['jml']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['total']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
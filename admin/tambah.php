<!Doctype html>
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
	<h2>Data Login</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<div class="panel panel-success">
    <div class="panel-heading">TAMBAH DATA lOGIN</div>
    <div class="panel-body">
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>id grup</td>
                <td><input type="text" name="id_grup"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Last Login</td>
                <td><input type="text" name="last_login"></td>
            </tr>
            <tr>
                <td>Create Login</td>
                <td><input type="text" name="create_login"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    
</body>
</html>
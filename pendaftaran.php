<html>
<head>
	<title>pendaftaran</title>
</head>
<body>
	<p>Selamat Datang Di Halaman Pendaftaran</p>
	<hr>
	<form action="proses_pendaftaran.php" method="POST">
	<fieldset>
		<legend>pendaftaran</legend>
	<table>
	<tr>
		<td><label>Nama :</label></td>
			<td><input type="text" name="nama" placeholder="masukkan nama..."></td>
	<tr>
		<td><label>Email :</label></td>
			<td><input type="email" name="email" placeholder="Masukkan Email..."></td>
	</tr>
	<tr>
		<td><label>Tanggal lahir :</label></td>
			<td><input type="date" name="tanggal_lahir" placeholder="Masukkan tanggal lahir..."></td>
	</tr>
	<tr>
		<td><label>Alamat :</label></td>
		<td><textarea name="alamat" placeholder="masukkan alamat..."></textarea></td>
	</tr>
	<tr>
			<td><input type="submit" name="daftar" value="daftar"></td>
	</tr>
</table>
<a href="tampil_pendaftaran.php"></a>
</fieldset>
<hr>
<div>copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</form>
</body>
</html>
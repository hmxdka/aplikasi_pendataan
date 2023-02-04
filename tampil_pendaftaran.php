<html>
<head>
	<title>tampil daftar</title>
</head>
<body>
</html>
<?php
include "koneksi.php";

?>
<h2 align="center">Daftar</h2>
<table border="1" width="60%" cellpadding="5" align="center" >
	<tr>
		<td>NO</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Tanggal</td>
		<td>Alamat</td>
	</tr>
	<?php
		$tampil= mysqli_query($mysqli, "select * from pendaftaran");
		$no = 1;
		while($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['tanggal_lahir']; ?></td>
		<td><?php echo $hasil['alamat']; ?></td>
	</tr>
	<?php
}
?>
</table>
<a href="admin.php">kembali</a>
<hr>
		<div>copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>		
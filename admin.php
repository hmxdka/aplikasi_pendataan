<html>
<head>
	<title>Admin</title>
</head>
<body>
	<br>
	<a href="tampil_pendaftaran.php">tampil pendaftaran</a>|
	<a href="tambah_event.php">event</a>|
	<a href="login.php">Logout</a>
	<hr>
<?php
	include "koneksi.php";
?>
<h2 align="center">Daftar Event</h2>
<table border="1" width="60%" cellpadding="5" align="center" >
	<tr>
        <td align="center">No</td>
        <td align="center">Nama Event</td>
		<td align="center">Tanggal Event</td>
		<td align="center">Informasi</td>
</tr>
	<?php
		$tampil = mysqli_query($mysqli, "select * from admin");
		$no = 1;
		while($hasil = mysqli_fetch_array($tampil)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['tanggal']; ?></td>
		<td><?php echo $hasil['informasi']; ?></td>
	</tr>
	<?php
}
?>
</table>
	<hr>
		<div>copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>
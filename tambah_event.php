<html>
<head>
	<title>Event</title>
</head>
<body>
	<form action="proses_tambah_event.php" method="post">
	<fieldset>
		<legend>Tambah Event</legend>
		<table>
		<tr>
			<td><label>Nama Event :</label></td>
			<td><input type="text" name="nama" placeholder="masukkan nama..." required></td>
		</tr>

		<tr>
		    <td><label>Tanggal Event :</label></td>
			<td><input type="date" name="tanggal" placeholder="Masukkan tanggal..." required></td>
		</tr>
		<tr>
		    <td><label>Informasi Event :</label></td>
			<td><textarea name="informasi" placeholder="Masukkan informasi..." required></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="login" required></td>
		</tr>
	</table>
	</fieldset>
	<hr>
<div>copyright &copy; 2023 | SMK Luqman Al Hakim Kudus</div>
</body>
</html>
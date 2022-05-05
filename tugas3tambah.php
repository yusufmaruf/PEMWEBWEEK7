<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
</head>
<body>
    <center>
    <h2> CRUD DATA MAHASISWA</h2>
    <h3>Achmad yusuf Al Ma'ruf</h3>
    <h3>20082010148</h3>
    <br>
	<a href="tugas3index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Pegawai</h3>
	<form method="post" action="tugas3tambahact.php">
		<table>
			<tr >			
				<td width = "300">Nama : </td>
				<td width = "300"><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width = "300">Email : </td>
				<td width = "300"><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td width = "300">Alamat</td>
				<td width = "300"><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td ><input type="submit" value="SIMPAN"></td>
				<td></td>

            </tr>		
		</table>
	</form>
    </center>
</body>
</html>
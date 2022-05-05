<!DOCTYPE html>
<html>
<head>

<br>
    <style type="text/css">
     input[type=text] {
        width:300px;
        height:20px;
    }
    #ta{
        height:50px;
        width:300px;
    }
    </style>
</head>
<body>
    <center>
 
	<h2>CRUD Pegawai</h2>
    <h4> Update data pegawai</h4>
    
	<br/>
	<a href="tugas3index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'tugas3koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from db_fakultas where id ='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="tugas3editact.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>" >
					</td>
				</tr>
				<tr>
					<td width="100">Email</td>
					<td><input type="text" name="mail" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td ><input type="" name="alamat" value="<?php echo $d['alamat']; ?>" id="ta"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
    </center>
 
</body>
</html>
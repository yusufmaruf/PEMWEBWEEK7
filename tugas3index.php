<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <center>
        <h2> CRUD DATA MAHASISWA</h2>
        <h3>Achmad yusuf Al Ma'ruf</h3>
        <h3>20082010148</h3>
        <br>
        <a href="tugas3tambah.php">+ Tambah Pegawai</a>
        <br><br>
        <table border="1">
            <tr style="background-color: orange;">
                <th >No</th>
                <th>Nama Pegawai</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php 
            include 'tugas3koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM db_fakultas");
            while($d = mysqli_fetch_array($data)){
            ?>
                <tr >
                    <td><?php echo $no++; ?></td>
                    <td width="300" align="center"><?php echo $d['nama']; ?></td>
                    <td width="300" align="center"><?php echo $d['email']; ?></td>
                    <td width="300" align="center"><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="tugas3edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                        <a href="tugas3hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </table>
    </center>
    
</body>
</html>
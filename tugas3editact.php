<?php 
// koneksi database
include 'tugas3koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['mail'];
$alamat = $_POST['alamat'];
echo $id;
 
// update data ke database
mysqli_query($koneksi,"UPDATE `db_fakultas` SET `nama` = '$nama', `email` = '$email', `alamat` = '$alamat' WHERE `db_fakultas`.`id` = $id;"); 
// mengalihkan halaman kembali ke index.php
header("location:tugas3index.php");

?>
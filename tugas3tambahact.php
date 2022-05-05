<?php
//koneksi database
include 'tugas3koneksi.php';
//menangkap data yang dikirim user
$nama = $_POST['nama'];
$email = $_POST['mail'];
$alamat = $_POST ['alamat'];
// input ke db
mysqli_query($koneksi,"INSERT INTO `db_fakultas` (`id`, `nama`, `email`, `alamat`) VALUES (NULL, '$nama', '$email', '$alamat')");
//kembali ke index atau halaman awal
header("location:tugas3index.php");
?>
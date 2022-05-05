<?php
include 'tugas3koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM `db_fakultas` WHERE `db_fakultas`.`id` = $id");

header("location: tugas3index.php");
?>

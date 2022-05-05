<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_fakultas");

if(!$koneksi){
    die("connection failed : " . mysqli_connect_error()); //msg eror
}

?>
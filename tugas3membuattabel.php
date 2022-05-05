<?php
//deklarasi server, ussername, pw dan database
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "db_fakultas";
//membuat tabel
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if(!$conn){
    die("connection failed : " . mysqli_connect_error()); //msg eror

}
//pembuatan tabel
$querysql = "CREATE TABLE db_fakultas(
    id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama  VARCHAR(200) NOT NULL,
    email VARCHAR(50) NOT NULL,
    alamat text
    )";
//penmgecekan
if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>

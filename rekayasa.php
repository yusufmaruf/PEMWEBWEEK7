<?php 
$servername = "localhost"; // deklarasikan variabel servername yaitu localhost
$username = "root"; // deklarasikan variabel username yaitu root
$password = ""; // deklarasikan variabel password yaitu ""
$dbname = "newDB"; // deklarasikan variabel database yaitu newDB

// Buat koneksi 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); // jika koneksi gagal akan memunculkan Connection failed dan pesannya 
}

// Membuat tabel  liga pada database newDB
$sql = "CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3))";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully"; // jika koneksi dan data berhasil dibuat akan Menampilkan teks New record created successfully 
} else {
	echo "Error: ". $sql. "<br>" . mysqli_error($conn); // jika data tidak berhasil dibuat/error akan Menampilkan error 
}

mysqli_close($conn); // Menutup koneksi mysqli
?>
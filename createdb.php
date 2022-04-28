<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password); 

// Cek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}

// Buat database
$sql = "CREATE DATABASE newDB";
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully"; 
} else {
	echo "Error creating database: ".mysqli_error($conn); 
}

mysqli_close($conn);
?>
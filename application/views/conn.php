<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "trash";

$conn = mysqli_connect($host,$user,$password,$database);

if($conn->connect_error){
	die("Koneksi gagal");
}

?>
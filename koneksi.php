<?php
// isi nama host, username mysql, dan password mysql anda

$databaseHost = "localhost";
$databaseName = "kesehatan";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//$host = mysqli_connect("localhost","root","");

if($mysqli){ 
     echo "koneksi db berhaskil.<br/>";
}else{
    echo "koneksi gagal.<br/>";
}
?>
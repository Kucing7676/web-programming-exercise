<?php

$dbHost = 'localhost';
$dbName = 'db_leaderboard';
$dbUsername = 'root';
$dbPassword = null;

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
  die("Koneksi Gagal:". $conn->connect_error);
}

?>
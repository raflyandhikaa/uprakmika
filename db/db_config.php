<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "ukk_kasir";

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

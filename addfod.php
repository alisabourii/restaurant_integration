<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "resturantdb";

$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['id'];
$status = $_GET['status'];
$conn->query("UPDATE `foods` SET stok='$status' WHERE `fd_id`=$id");

//echo "Başarıyla güncellendi!";
?>

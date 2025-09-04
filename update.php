<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "resturantdb";

$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['id'];
$conn->query("UPDATE `foods` SET stok='1' WHERE `fd_id`=$id");

echo "Başarıyla güncellendi!";
?>

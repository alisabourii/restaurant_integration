<?php
//Add Image
if (isset($_FILES['fd_img'])) {
    $targetDir = "src/"; // fotoğrafın kaydedileceği klasör
    $fileName = basename($_FILES["fd_img"]["name"]);
    $targetFile = $targetDir . $fileName;

    // sadece belirli uzantılara izin ver
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["fd_img"]["tmp_name"], $targetFile)) {
            echo "Fotoğraf başarıyla yüklendi: <br>";
            echo "<img src='$targetFile' width='200'>";
        } else {
            echo "Hata: Fotoğraf yüklenemedi.";
        }
    } else {
        echo "Sadece JPG, JPEG, PNG ve GIF dosyaları yüklenebilir.";
    }
}

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "resturantdb";

$conn = new mysqli($servername, $username, $password, $dbname);
$fd_name  =  $_POST['fd_name'];
$fd_desc  =  $_POST['fd_desc'];
$fd_price =  $_POST['fd_price'];
$fd_img   =  $_POST['fd_img'];
$conn->query("INSERT INTO `foods`(`fd_name`, `fd_desc`, `fd_price`, `fd_img`, `stok`) 
                    VALUES ('$fd_name','$fd_desc','$fd_price','$fd_img','0')");
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="addfoddstyle.css" rel="stylesheet">
</head>
<body>
<div class="mainButtons">
    <button class="btn" onclick="location.href = 'index.php'">Main</button>
    <button class="btn" onclick="location.href = 'menu.php'">Menu</button>
    <button class="btn" onclick="location.href = 'setting.php'">Settings</button>
</div>

<div class="form-container">
    <h2>Yemek Ekle</h2>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="fd_img" required>
        <input type="text" id="fd_img" name="fd_img" placeholder="Fotoğraf Adı" required>
        <input type="text" id="fd_name" name="fd_name" placeholder="Yemek Adı" required>
        <input type="text" id="fd_desc" name="fd_desc" placeholder="Açıklama" required>
        <input type="text" id="fd_price" name="fd_price" placeholder="Fiyat" required>
        <button type="submit">Kaydet</button>
    </form>
</div>
</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "resturantdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
//echo "Bağlantı başarılı!";
// Verileri çek
$sql = "SELECT * FROM foods";
$result = $conn->query($sql);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="mainButtons noPrint">
    <button class="btn" onclick="location.href = 'index.php'">Main</button>
    <input type="text" id="foodName">
    <button class="btn" onclick="searching()">Search</button>
</div>
<div class="grid">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if($row['stok'] == '1'){
            ?>
            <article class="card" aria-label="<?php echo htmlspecialchars($row['fd_id']); ?>" id="<?php echo htmlspecialchars($row['fd_id']); ?>">
                <img class="card__img" src="src/<?php echo htmlspecialchars($row['fd_img']); ?>" alt="Ürün fotoğrafı: <?php echo htmlspecialchars($row['fd_name']); ?>" />
                <div class="card__body">
                    <h3 class="card__title"><?php echo htmlspecialchars($row['fd_name']); ?></h3>
                    <p class="card__desc"><?php echo htmlspecialchars($row['fd_desc']); ?></p>
                    <div class="card__price"><?php echo htmlspecialchars($row['fd_price']); ?>₺</div>
                    <button class="btn" onclick="updateStatus(<?php echo htmlspecialchars($row['fd_id']); ?>)">Remove</button>
                </div>
            </article>
            <?php
            }
            else{?>
    <article class="card" aria-label="<?php echo htmlspecialchars($row['fd_id']); ?>" id="<?php echo htmlspecialchars($row['fd_id']); ?>">
        <img class="card__img" src="src/<?php echo htmlspecialchars($row['fd_img']); ?>" alt="Ürün fotoğrafı: <?php echo htmlspecialchars($row['fd_name']); ?>" />
        <div class="card__body">
            <h3 class="card__title"><?php echo htmlspecialchars($row['fd_name']); ?></h3>
            <p class="card__desc"><?php echo htmlspecialchars($row['fd_desc']); ?></p>
            <div class="card__price"><?php echo htmlspecialchars($row['fd_price']); ?>₺</div>
            <button class="btn" onclick="updateStatus(<?php echo htmlspecialchars($row['fd_id']); ?>)">Add</button>
        </div>
    </article>


    <?php
            }
        }
    } else {
        echo "Tabloda veri yok.";
    }
    $conn->close();
    ?>
</div>

</body>
<script>
    function searching(){
        var foodName = document.getElementById("foodName").value;
        //alert(foodName);
        window.location="#"+foodName+"";
    }

    function updateStatus(id){
        fetch("update.php?id=" + id)
            .then(res => res.text())
            .then(data => alert(data));
    }
</script>
</html>

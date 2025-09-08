<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            width: 100%;
            padding: 12px;
             border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
    </style>

</head>
<body>
<div class="mainButtons">
    <input type="text" id="unameId" placeholder="Username">
    <input type="text" id="upassId" placeholder="Password">
    <button class="btn" onclick="loginControl()">Login</button>
</div>

<div class="mainButtons" id="btns" >
    <button class="btn" onclick="location.href = 'menu.php'" >Menu</button>
    <button class="btn" onclick="location.href = 'setting.php'">Settings</button>
    <button class="btn" onclick="location.href = 'addfod.php'" >New Food</button>
</div>

</body>
</html>
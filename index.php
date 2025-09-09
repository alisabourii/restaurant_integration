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

<div class="mainButtons">
    <button class="btn" id="btn1"  onclick="location.href = 'menu.php'" disabled>Menu</button>
    <button class="btn" id="btn2"  onclick="location.href = 'setting.php'" disabled>Settings</button>
    <button class="btn" id="btn3"  onclick="location.href = 'addfod.php'" disabled>New Food</button>
</div>
<script>
    function loginControl(){
        var uname = document.getElementById("unameId").value;
        var upass = document.getElementById("upassId").value;
        console.log(uname+" | "+upass);
        if (uname == "ali" && upass == "1234"){
            document.getElementById("btn1").disabled = false;
            document.getElementById("btn2").disabled = false;
            document.getElementById("btn3").disabled = false;
        }
        else{
            alert("Login information is wrong");
        }

    }
</script>
</body>
</html>
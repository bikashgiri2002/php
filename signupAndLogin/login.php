<?php
session_start();
if(isset($_SESSION["gmail"])){
    header("Location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            height: 100vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(wallpaperflare.com_wallpaper\ \(2\).jpg);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .login{
            height: 300px;
            width: 400px;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
            background-color: rgb(7, 7, 247,0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        .button{
            text-align:center;
        }
        button{
            height: 40px;
            width:100px;
            border-radius: 20px;
            background-color: rgb(197, 40, 43);
            color: black;
        }
        .input{
            display: flex;
            flex-direction: column;
        } 
        input{
            height: 40px;
            border:1px solid black;
            border-radius: 20px;
            background-color: rgba(91, 83, 83, 0.7);
            color: white;
        }  
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="login_submit.php" class="login">
            <div class="input">
            <label for="gmail">Gmail : </label>
            <input type="email" name="gmail" id="gmail">
            </div>
            <div class="input">
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
            </div>
            <div class="button">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>
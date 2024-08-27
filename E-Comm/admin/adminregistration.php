<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.registration-container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.registration-container h2 {
    margin-bottom: 20px;
}

.registration-container label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

.registration-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.registration-container button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.registration-container button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <div class="registration-container">
        <h2>Register</h2>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="fileToUpload">Profile Photo : </label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
<?php
    include "..\data_base\db_connection.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $cpassword = trim($_POST["confirm_password"]);
        $profileImage = basename($_FILES["fileToUpload"]["name"]);
        $uploadDir = "images/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $targetFilePath = $uploadDir . $profileImage;
        $t = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath);
        if($password == $cpassword && $t){
            $encriptedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO admin VALUES (null,'$username','$encriptedPassword','$profileImage')";
            if($connection->query($sql) === TRUE){
                header("Location:adminlogin.php");
            }else{
                echo("<P>hela nahi</P>");
            }
        }else{
            echo("<p>no matching</p>");
        }
    }
?>
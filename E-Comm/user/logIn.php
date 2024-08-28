<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    text-align: left;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <p>if not have account <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
<?php
    // Include database connection
    include '../data_base/db_connection.php';
    session_start();
    // Process the registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $psw = $_POST["password"];
    // sql queay
    $sql = "select * from user where Email = '$email'";
    // sql query exhicution
    $result = $connection->query($sql);
    // check
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($psw, $row['Password'])){
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["UserName"] = $row["UserName"];
            $_SESSION["ProfileImage"] = $row["ProfileImage"];
            $_SESSION["UserID"] = $row["UserID"];
            header("location:../index.php");
        }else{
            echo("invalid password");
        }
    }else{
        echo("<p>log in failed\n invalid email or password</p>");
    }
}
?>
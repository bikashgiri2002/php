<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
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
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.login-container h2 {
    margin-bottom: 20px;
}

.login-container label {
    display: block;
    margin-bottom: 5px;
    text-align: left;
}

.login-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.login-container button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.login-container button:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
        <p>if you don't have account <a href="adminregistration.php">Ragister here</a></p>
    </div>
</body>
</html>
<?php
    include '../data_base/db_connection.php';
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM admin WHERE Username = '$username'";
        $result = $connection->query($sql);
        if($result->num_rows == 1){
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                if(password_verify($password, $row['Password'])){
                    $_SESSION["adminName"] = $row["Username"];
                    $_SESSION["adminPhoto"] = $row["photo"];
                    header("location:admin.php");
                }
            }else{
                echo("<p>Wrong password</p>");
            }
        }else{
            echo("<p>Wrong username</p>");
        }
    }    
?>

<?php
    // Include database connection
    include __DIR__ . '/../../data_base/db_connection.php';
    session_start();
    // Process the registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $psw = $_POST["psw"];
    // sql queay
    $sql = "select Email, UserName, ProfileImage, Password from user where Email = '$email'";
    // sql query exhicution
    $result = $connection->query($sql);
    // check
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($psw, $row['Password'])){
            header("location: ../../index.php");
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["UserName"] = $row["UserName"];
            $_SESSION["ProfileImage"] = $row["ProfileImage"];
        }else{
            echo("invalid password");
        }
    }else{
        echo("log in failed\n invalid email or password");
    }
}
?>
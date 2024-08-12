<?php 
session_start();
include "db_connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $gmail = $_POST["gmail"];
    $password = $_POST["password"];
    $sql = "select name,gmail,mobile,roll_no from user_data where gmail = '$gmail' and password = '$password'";
    $result = $connection->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $_SESSION["gmail"] = $row["gmail"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["mobile"] = $row["mobile"];
        $_SESSION["roll_no"] = $row["roll_no"];
        header("Location:dashboard.php");
    }else{
        echo("<h3>Email or password is wrong</h3>");
        header("Location:login.php");
    }
}
?>
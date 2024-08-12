<?php
include "db_connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $gmail = $_POST["gmail"];
    $mob = $_POST["mob"];
    $roll_no = $_POST["roll_no"];
    $password = $_POST["password"];
    $sql = "INSERT INTO user_data VALUES ('$name','$gmail','$mob','$roll_no','$password')";
    if ($connection->query($sql) === TRUE){
        echo "<h1>Registered Sucessfully</h1>";
        echo("<p><a href='login.html'>Log in</a> here</p>");
    }else{
        echo("error".$sql."<br>".$connection->error);
    }
}
?>
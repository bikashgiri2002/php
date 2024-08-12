<?php
include 'db_connection.php';
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "delete from user_data where roll_no = $id";
        if($connection->query($sql) === TRUE){
            echo("data deleted successfully");
        }
    }
?>
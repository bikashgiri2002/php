<?php
session_start();
    if(isset($_SESSION["UserName"])){
        include '../data_base/db_connection.php';
        $id = $_GET["ProductId"];
        $sql = "SELECT * FROM product WHERE ProductID = $id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
    }else{
        header("location:logIn.php");
    }
?>
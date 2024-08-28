<?php
session_start();
    if(isset($_SESSION["UserName"])){
        include '../data_base/db_connection.php';
        $id = $_GET["ProductId"];
        $sql = "SELECT * FROM product WHERE ProductID = $id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();
        $ProductPrice = $row["ProductPrice"];
        $ProductName = $row["ProductName"];
        $UserID = $_SESSION["UserID"];
        if($connection->query("INSERT INTO cart VALUES(null,$UserID,$id,'$ProductName',$ProductPrice)")){
            header("location:../index.php");
        }else{
            echo("hela nahi re puo");
        }
    }else{
        header("location:logIn.php");
    }
?>
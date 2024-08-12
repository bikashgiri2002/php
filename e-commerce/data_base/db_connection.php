<?php
    $connection = new mysqli("127.0.0.1:3306","root","Bikash@2503","E_Commerce");
    if($connection->connect_error){
        die("connection failed" .$connection->connect_error);
    }
?>
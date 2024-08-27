<?php
    include "../data_base/db_connection.php";
    $result = $connection->query("SELECT * FROM category");
    if($result->num_rows > 0){
        echo("<div class = 'm-3 d-flex justify-content-center align-items-center container-fluid'>");
        echo("<table class='table p-3 table-hover table-striped' border = '1'>");
        echo("<tr><th>ID</th><th>category</th></tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr><td>{$row["CategoryID"]}</td><td>{$row["CategoryName"]}</td></tr>");
        }
        echo("</table>");
        echo("</div>");
    }
?>
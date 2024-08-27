<?php
    include "../data_base/db_connection.php";
    $result = $connection->query("SELECT * FROM product");
    if($result->num_rows > 0){
        echo("<div class = 'm-3 d-flex justify-content-center align-items-center container-fluid'>");
        echo("<table class='table p-3 table-hover table-striped' border = '1'>");
        echo("<tr><th>ProductID</th><th>ProductName</th><th>ProductDescription</th><th>ProductPrice</th><th>CategoryID</th><th>ProductImage</th></tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr><td>{$row["ProductID"]}</td><td>{$row["ProductName"]}</td><td>{$row["ProductDescription"]}</td><td>{$row["ProductPrice"]}</td><td>{$row["CategoryID"]}</td><td><img style='height: 100px; width: 100px; object-fit: contain;' src='../uploads/products/{$row["ProductImage"]}' class='' alt='...'' /></td></tr>");
        }
        echo("</table>");
        echo("</div>");
    }
?>
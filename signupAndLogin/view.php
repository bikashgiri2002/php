<?php
    include 'db_connection.php';
    $sql = "select * from user_data";
    $result = $connection->query($sql);
    if($result->num_rows == 0){
        echo("<p> no data </p>");
    }else{
        echo("<table border = '1' height = '500px' width = '800px' style = ' text-align:center; padding: 10px;'>");
        echo("<tr>
    <th>Name</th>
    <th>Gmail</th>
    <th>Mobile</th>
    <th>Roll_No</th>
    <th colspan ='2'>Action</th>
</tr>");
        while($row = $result->fetch_assoc()){
            echo("<tr>");
            echo("<td>{$row["name"]}</td>");
            echo("<td>".$row["gmail"]."</td>");
            echo("<td>".$row["mobile"]."</td>");
            echo("<td>".$row["roll_no"]."</td>");
            echo("<td><a href='delete.php?id={$row["roll_no"]}'>Delete</a></td>");
            echo("<td><a href='update.php?id={$row["roll_no"]}'>Edit</a></td>");
            echo("</tr>");
        }
        echo("</table>");
    }
?>
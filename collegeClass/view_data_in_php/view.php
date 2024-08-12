<?php
include 'db_connection.php';
$sql = "select * from student";
$result = $connection->query($sql);
if($result->num_rows > 0){
   echo ("<h1>data get sucessesfully</h1>");
   echo("<table border = '1'>");
   echo("<tr>
   <th>Id</th>
   <th>Name</th>
   <th>Age</th>
   <th colspan = '2'>Action</th>
   </tr>");
   while($rows = $result->fetch_assoc()){
    echo("<tr>");
    echo("<td>" .$rows["Id"]."</td>");
    echo("<td>" .$rows["Name"]."</td>");
    echo("<td>" .$rows["Age"]."</td>");
    echo("<td>");
    echo("<a href='delete.php?id=".$rows["Id"]."'>Delete</a>");
    echo("</td>");
    echo("<td>");
    echo("<a href='edit.php?id=".$rows["Id"]."'>Edit</a>");
    echo("</td>");
    echo("</tr>");
   }
echo("</table>");
}else{
    echo ("<h1> No data</h1>");
}
echo("<a href = add.php>");
echo("Add new data");
echo("<a/>");
?>
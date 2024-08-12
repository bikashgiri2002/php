<?php
    include 'db_connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "select * from student where Id = '$id'";
        $result = $connection->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
        }else{
            echo("no data");
        }
    }else if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $age = $_POST["age"];
        $id = $_POST["id"];
        $sql = "update student set Name = '$name' ,Age = '$age' where Id = '$id'";
        if ($connection->query($sql) === TRUE) {
            echo "Record updated successfully";
            exit();
        } else {
            echo "Error updating record: " . $connection->error;
        }
         $connection->close();
    
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>
    <form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['Name']; ?>"><br>
        Age : <input type="number" name="age" value="<?php echo $row['Age']; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>  
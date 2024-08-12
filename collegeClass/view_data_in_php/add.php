<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $id = $_POST["id"];
    $sql = "insert into student values ($id,'$name' ,$age)";
    if ($connection->query($sql) === TRUE) {
        echo "Record successfully";
        exit();
    } else {
        echo "Error  record: " . $connection->error;
    }
    $connection->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add</title>
</head>
<body>
    <form action="add.php" method="POST">
    Id :<input type="number" name="id" value=""><br>
        Name: <input type="text" name="name"><br>
        Age : <input type="number" name="age"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
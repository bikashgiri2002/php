<?php
    include 'db_connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM student WHERE id = $id";
     if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $connection->error;
    } 
    $connection->close();

    }
?>

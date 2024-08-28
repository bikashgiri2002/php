<?php
    session_start();
    if(!isset($_SESSION["UserName"])){
        header("location:logIn.php");
    }
    include '../data_base/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-center flex-column align-items-center container-fluid py-4">
<?php
    $_SESSION["sum"] = 0;
    $UserID = $_SESSION["UserID"];
    $result = $connection->query("SELECT * FROM cart WHERE UserID = $UserID");
    if($result->num_rows > 0){
        $_SESSION["productInCart"] = $result->num_rows;
        while($row = $result->fetch_assoc()){
            $ProductID = $row["ProductID"];
            $picture = $connection->query("SELECT ProductImage FROM product WHERE ProductID = $ProductID");
            $picture = $picture->fetch_assoc();
            $_SESSION["sum"] = $_SESSION["sum"] + $row["ProductPrice"];
            echo("<div class='card mb-3 container-fluid bg-info'>
                    <div class='row g-0'>
                        <div class='col-md-4 p-1' style='height:100px'>
                            <img src='../uploads/products/{$picture["ProductImage"]}' class='img-fluid rounded-start' style='height:100%' alt='...'>
                        </div>
                        <div class='col-md-8'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row["ProductName"]}</h5>
                                <h6 class='card-text'>{$row["ProductPrice"]}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                ");
        }
        echo("<h2 class='container-fluid p-2 m-1 bg-secondary text-light'>TOTAL PRICE : {$_SESSION["sum"]}</h2>");
    }
?>
</div>
</body>
</html>
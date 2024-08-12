<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check box in php</title>
</head>
<body>
    <form action="#" method="post">
        <input type="checkbox" name="jalakhia[]" id="" value="Pizza">Pizza <br>
        <input type="checkbox" name="jalakhia[]" id="" value="Burger">Burger <br>
        <input type="checkbox" name="jalakhia[]" id="" value="Momo">Momo <br>
        <input type="checkbox" name="jalakhia[]" id="" value="Kotlet">Kotlet <br>
        <input type="checkbox" name="jalakhia[]" id="" value="Puri And Tarakari">Puri And Tarakari <br>
        <button type="submit" name="submit">Kana khaiba</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $foods = $_POST["jalakhia"];
    echo("you select ");
    foreach($foods as $food){
        echo("{$food}, ");
    }
}
?>
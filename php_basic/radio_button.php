<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="radio" value="Visa" name = "credit_card">Visa <br>
        <input type="radio" value="Master Card" name = "credit_card">Master Card <br>
        <input type="radio" value="Rupay" name = "credit_card">Rupay <br>
        <input type="radio" value="American Express" name = "credit_card">American Express <br>
        <button type="submit" name="submit">Click here</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["credit_card"])){
            $choose = $_POST["credit_card"];
            echo("You selected {$choose}");
        }else{
            echo("Plz choose a option");
        }
    }
?>
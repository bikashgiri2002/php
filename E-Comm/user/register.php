<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
    body{
        padding: 0;
        margin:0;
        width: 100vw;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .pop-up{
    display: static;
    height: 90vh;
    border-radius: 40px;
    border: 3px solid #f1f1f1;
    background-color: white;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}
.form-container {
    max-width: 500px;
    height: 100%;
    padding: 10px;
    padding-top: 0;
    background-color: white;
}
.form-container input[type=text], .form-container input[type=password], .form-container input[type=email] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}
textarea{
    width: 100%;
    padding: 10px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
    height: 40px;
}
    </style>
</head>
<body>
<div class="pop-up" id="myForm">
      <form action="#" method="POST" class="form-container" enctype="multipart/form-data">
        <div class="inputBox">
          <label for="name">Name : </label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="inputBox">
          <label for="email">Email : </label>
          <input type="email" id="email" name="email" />
        </div>
        <div class="inputBox radioBox">
          <label for="gender">Gender : </label><br>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
        </div>
        <div class="inputBox">
            <label for="address">Address : </label>
            <textarea name="address" id="address" cols="50" rows="2" placeholder="Write your complete address"></textarea>
        </div>
        <div class="inputBox">
            <label for="fileToUpload">Profile Photo : </label>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div class="inputBox">
            <label for="password">Create Password : </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="inputBox">
            <label for="cpassword">Conform Password : </label>
            <input type="password" name="cpassword" id="cpassword">
        </div>
        <div class="inputBox signUp">
            <button type="submit" class="btn">Sign Up</button>
        </div>
        <div class="inputBox">
            <p>If already have a account <a href="logIn.php">log In</a></p>
        </div>
      </form>
    </div>
</body>
</html>
<?php
// Include database connection
include "..\data_base\db_connection.php"; // Adjust this based on the actual path

// Start session to store errors
session_start();
$errors = [];

// Process the registration form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];
    $address = trim($_POST['address']);
    $gender = $_POST['gender'];
    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Handle profile image upload

    $uploadDir = '../uploads/profile/';
    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $profileImage = basename($_FILES["fileToUpload"]["name"]);
    $targetFilePath = $uploadDir . $profileImage;
    // Move uploaded file to the target directory
    $t = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath);
    if($t){
        // Prepare the SQL query to insert the new user into the database
    $sql = "INSERT INTO User (UserName, Email, Password, Address, Gender, ProfileImage, RegistrationDate) 
    VALUES ('$username', '$email', '$hashedPassword', '$address', '$gender', '$profileImage', NOW())";
    // Execute the query
    if ($connection->query($sql) === TRUE) {
    // Successful registration, redirect to login page
    header("location:../index.php");
    } else {
        echo("sql helani");
        $errors[] = "Error: " . $connection->error;
        //header("Location: ../register.php");
        //exit();
    }
    }else{
        echo("helani");
    }
}

    // Store errors in session to display on the registration form
    $_SESSION['errors'] = $errors;
    // echo($_SESSION['errors']);
?>

<?php
// Include database connection
include __DIR__ . '/../../data_base/db_connection.php'; // Adjust this based on the actual path

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

    $uploadDir = '../../uploads/';
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
    header("location: ../../index.php");
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

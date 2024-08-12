<?php
session_start();
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Dashboard</title>
    <style>
        /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styling for header, main, and footer */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}

header {
    background-color: #1da1f2;
    color: #fff;
    padding: 20px;
    text-align: center;
}
nav {
    background-color: #1da1f2;
    color: #fff;
}

ul {
    list-style-type: none;
    display: flex;
    justify-content: space-around;
    padding: 10px;
}

li {
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
.logout_button{
    height: 50px;
    width:100px;
    padding: 10px;
    border-radius: 20px;
    background-color: rgb(197, 40, 43);
    color: black;
}

/* Add hover effect */
a:hover {
    text-decoration: underline;
}

main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #ddd;
}

/* Style your content panels (timeline, notifications, messages) */
/* Add your own custom styles here */

/* Responsive adjustments */
@media screen and (max-width: 768px) {
    /* Adjust styles for smaller screens */
}

    </style>
</head>
<body>
    <header>
        <h1><?php echo($name . "'s Social Dashboard");?></h1>
        <!-- Add user profile picture and navigation links here -->
        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Explore</a></li>
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="logout.php" class="logout_button">Log Out</a></li>
        </ul>
    </nav>
    </header>
    <main>
        <!-- Add content panels (e.g., timeline, notifications, messages) here -->
    </main>
    <footer>
        <p>&copy; 2024 My Social App</p>
    </footer>
</body>
</html>

<?php
    session_start();
    if(isset($_SESSION["UserName"])){
        echo("<img src=\"uploads/{$_SESSION["ProfileImage"]}\" alt=\"\" />");
        echo("<p>{$_SESSION["UserName"]}</p>");
    }else{
        echo("<button onclick="."openLogInForm()".">Log In</button>
        <button onclick="."openSignUpForm()".">Sign Up</button>");
    }
?>
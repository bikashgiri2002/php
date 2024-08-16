<?php
    session_start();
    if(isset($_SESSION["UserName"])){
        echo("<p>{$_SESSION["UserName"]}</p>");
        echo("<button onclick="."sessionKill()".">Log out</button>");
    }else{
        echo("<button onclick="."openLogInForm()".">Log In</button>
        <button onclick="."openSignUpForm()".">Sign Up</button>");
    }
?>
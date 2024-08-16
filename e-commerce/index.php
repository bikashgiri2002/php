<?php
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/script.js"></script>
    <title>Geo Hub</title>
  </head>
  <body>
    <main>
      <div class="container">
        <?php include "includes/card.php"; ?>
        <?php include "includes/card.php"; ?>
        <?php include "includes/card.php"; ?>
      </div>
    </main>
    <div class="pop-up" id="myForm">
      <form action="user/actions/register.php" method="POST" class="form-container" enctype="multipart/form-data">
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
            <p display="inline">If already have account <b> <p onclick="openLogInForm()" display="inline">Log in here</p></b></p>
        </div>
        <button type="button" class="btn cancel" onclick="closeSignUpForm()">Close</button>
      </form>
    </div>
    <div class="form-popup" id="myLogInForm">
        <form action="user/actions/logIn.php" class="form-container" method="POST">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeLogInForm()">Close</button>
        </form>
    </div>
    <!-- <script>
      function sessionKill(){
        <?php
          session_start();
          session_unset();
          session_destroy();
          header("Location:../index.php");
        ?>
  }
    </script> -->
  </body>
</html>

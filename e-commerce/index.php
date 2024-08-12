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
    <header>
      <nav>
        <div class="nav_icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"
            />
          </svg>
        </div>
        <div class="options">
          <ul>
            <li>Home</li>
            <li>
              <select>
                <option value="">Catagories</option>
                <option value="">Hammer</option>
                <option value="compus">Compus</option>
                <option value="">Map</option>
              </select>
            </li>
            <li>Refurbished</li>
            <li>Clothes</li>
          </ul>
        </div>
        <div class="profile">
          <?php include "includes/profile.php"; ?>
        </div>
      </nav>
    </header>
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
        <form action="user/actions/logIn.php" class="form-container">
            <h1>Login</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeLogInForm()">Close</button>
        </form>
    </div>
  </body>
</html>
<?php
  
?>

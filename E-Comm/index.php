<?php
  session_start();
  if(isset($_SESSION["UserName"])){
    $name = $_SESSION["UserName"];
    $photo = $_SESSION["ProfileImage"];
    $btn = "log out";
    $link = "logout.php";
  }else{
    $name = "guest";
    $photo = "blank.jpg";
    $btn = "log in";
    $link = "logIn.php";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Geo Hub</title>
    <!-- External css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- boot strap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- font awesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container-fluid p-0">
      <!-- first chid -->
      <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid text-white">
          <a class="navbar-brand text-white" href="#"
            ><img
              class=""
              height="80"
              src="assets/images/android-chrome-192x192.png"
              alt="logo"
          /></a>
          <a class="navbar-brand text-white" href="#">Geo Hub</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user/register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/adminlogin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user/cart_view.php"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Categories
                </a>
                <ul class="dropdown-menu">
                <?php
                  include "data_base/db_connection.php";
                  $result = $connection->query("SELECT * FROM category");
                  if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                      echo("<li><a class='dropdown-item' href='#'>{$row["CategoryName"]}</a></li>");
                    }
                  }
                ?>
                </ul>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button
                class="btn btn-outline-success bg-danger text-white"
                type="submit"
              >
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
      <!-- log in info -->
      <nav class="navbar navbar-expand-lg bg-secondary">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><img src="uploads/profile/<?php echo "$photo"; ?>" alt="profile_photo"></li>
          <li class="nav-item">
            <a herf="" class="nav-link">Wellcome <?php echo"{$name}"; ?></a>
          </li>
        </ul>
        <ul class="navbar-nav mr-10">
          <li class="nav-item"><a href="user/<?php echo "$link"; ?>" class="btn btn-info"><?php echo"{$btn}"; ?></a></li>
        </ul>
      </nav>
      <!-- store name and tag line -->
      <div class="bg-light">
        <h3 class="text-center">Geo Store</h3>
        <p class="text-center">
          Unearth the Best: Tools and Treasures for Every Geologist
        </p>
      </div>
      <!-- product and side nav -->
      <div class="row">
        <div class="col-md-10">
          <!-- all products card -->
          <div class="row">
            <?php include "product.php"; ?>
          </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
          <!-- filters -->
          <!--Side bar nav-->
          <ul class="navbar-nav text-center me-auto">
            <li class="nav-item bg-info"><a href="" class="nav-link"><h4>Prices</h4></a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">Below 99</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">100 - 499</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">500 - 1499</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">1500 - 2999</a></li>
            <li class="nav-item"><a href="" class="nav-link text-light">Above 3000</a></li>
          </ul>
        </div>
      </div>
      <!-- last child -->
      <div
        class="container-fluid d-flex flex-column justify-content-center align-items-center bg-body-secondary"
      >
        <p>Thank you for visiting my website</p>
        <p>Developed by TechGeo pvt. Limited</p>
      </div>
    </div>
    <!-- javaScript link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

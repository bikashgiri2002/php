<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashBoard</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        nav img{
            height:60px;
            width:60px
        }
        .adminphoto{
            height:120px;
            width:120px;
            object-fit: contain;
        }
        .adminphoto img{
            height:100%;
            width:100%;
        }
        .d-flex{
            gap:10px;
        }
    </style>
    <!-- bootstarp css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <img class="nav-item" src="../assets/images/android-chrome-192x192.png" alt="App-logo">
            <p class="nav-item">Wellcome Admin</p>
        </div>
        </nav>
    </div>
    <h1 class="text-center">Manage Products</h1>
    <div class="container-fluid bg-secondary row">
        <div class="text-center col-md-2">
            <img src="images/blank.jpg" alt="admin photo" class="adminphoto mt-1">
            <p>Admin name</p>
        </div>
        <div class="col-md-10">
            <div class="navbar d-flex justify-content-center align-items-center">
                <a href="" class="nav-item btn btn-info">Insert Product</a>
                <a href="" class="nav-item btn btn-info">View Products</a>
                <a href="" class="nav-item btn btn-info">Insert Catagory</a>
                <a href="" class="nav-item btn btn-info">View Catagories</a>
                <a href="" class="nav-item btn btn-info">Inset Brand</a>
                <a href="" class="nav-item btn btn-info">View Brands</a>
                <a href="" class="nav-item btn btn-info">All Orders</a>
                <a href="" class="nav-item btn btn-info">All Payments</a>
                <a href="" class="nav-item btn btn-info">List Users</a>
                <a href="" class="nav-item btn btn-danger">Log Out</a>
            </div>
        </div>
    </div>
    <!-- bootstarp js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>
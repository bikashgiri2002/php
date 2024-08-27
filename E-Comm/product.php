<?php
    include 'data_base/db_connection.php';
    $result = $connection->query("SELECT * FROM product");
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo("<div class='col-md-4 mb-2' style='height: 500px;'>
              <div class='card' style='height: 100%;'>
                <img style='height: 40%;' src='uploads/products/{$row["ProductImage"]}' class='card-img-top' alt='...'' />
                <div class='card-body' style='height: 60%;'>
                  <h5 class='card-title'>{$row["ProductName"]}</h5>
                  <h5 class='card-title'>₹{$row["ProductPrice"]}</h5>
                  <p class='card-text product-description'>
                    {$row["ProductDescription"]}
                  </p>
                  <a href='user/cart.php?ProductId=".$row["ProductID"]."' class='btn btn-info'>Add to cart</a>
                  <a href='#' class='btn btn-secondary'>View more</a>
                </div>
              </div>
            </div>");
        }
    }
?>
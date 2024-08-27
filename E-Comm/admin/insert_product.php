<form method="post" action="#" enctype="multipart/form-data">
  <label for="ProductName">Product Name:</label>
  <input type="text" id="ProductName" name="ProductName"><br><br>
  
  <label for="ProductDescription">Product Description:</label>
  <textarea id="ProductDescription" name="ProductDescription"></textarea><br><br>
  
  <label for="ProductPrice">Product Price:</label>
  <input type="number" id="ProductPrice" name="ProductPrice" step="0.01"><br><br>
  
  <label for="CategoryID">Category ID:</label>
  <select id="CategoryID" name="CategoryID">
  <option value="null">Select a category</option>
    <!-- options will be populated dynamically based on available categories -->
    <?php
    include "../data_base/db_connection.php";
    $result = $connection->query("SELECT * FROM category");
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo("<option value='{$row["CategoryID"]}'>{$row["CategoryName"]}</option>");
        }
    }
    ?>
  </select><br><br>
  
  <label for="ProductImage">Product Image:</label>
  <input type="file" id="ProductImage" name="ProductImage"><br><br>
  
  <input type="submit" value="Submit">
</form>
<?php
include "../data_base/db_connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = $_POST["ProductName"];
    $productDescription = $_POST["ProductDescription"];
    $productPrice = $_POST["ProductPrice"];
    $categoryID = $_POST["CategoryID"];
    $productImage = $_FILES["ProductImage"];

    // Validate inputs
    if (empty($productName) || empty($productDescription) || empty($productPrice) || empty($categoryID)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Upload product image
    $target_dir = "../uploads/products/";
    $target_file = $target_dir . basename($productImage["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($productImage["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, PNG & JPEG files are allowed.";
        $uploadOk = 0;
    }

    // Upload image
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($productImage["tmp_name"], $target_file)) {
            $productImage = basename($productImage["name"]);
            $sql = "INSERT INTO product VALUES (null,'$productName','$productDescription','$productPrice',$categoryID,'$productImage')";
            if($connection->query($sql)){
                echo("Product listed sucessfully");
            }else{
                echo("hela nahi");
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
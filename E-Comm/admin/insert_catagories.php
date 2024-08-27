<div class="container-fluid my-3">
<form action="#" method="post">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Insert Catagory" aria-label="Username" aria-describedby="basic-addon1" name="category">
</div>
<div class="d-flex justify-content-center align-items-center"><button type="submit" class="bg-info p-2">Insert</button></div>
</form>
</div>
<?php
  include "../data_base/db_connection.php";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category = $_POST["category"];
    if($connection->query("INSERT INTO category VALUES (null,'{$category}')")){
      header("location:admin.php?view_categories");
    }else{
      echo("<h2>hela nahi</h2>");
    }
  }
?>
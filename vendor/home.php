<?php

  include "authguard.php";
  include "menu.html";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center bg-light vh-100">
    <form enctype="multipart/form-data" action="upload.php" method="post" class="w-50 bg-warning p-5">
        <h3>ADD PRODUCT</h3>
        <input class="form-control mt-3" type="text" name="name"  placeholder="Product name">
        <input class="form-control mt-2" type="text"  name="price"  placeholder="Product Price">
        <textarea class="form-control mt-2" name="detail" id="" cols="30" rows="5"></textarea>
        <input class="form-control mt-2" type="file"  name="pdtimg" accept=".jpg,.jpeg,.png">
        <div class="text-center mt-3" >
          <button class="btn btn-danger">Add Product</button> 
        </div>
</body>
</html>
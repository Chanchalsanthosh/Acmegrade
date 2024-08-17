<?php
  include "authguard.php";
  include "menu.html";
  include "../shared/connection.php";
  $pid=$_GET['pid'];
  $sql_result = mysqli_query( $conn, "SELECT * FROM product where pid=$pid");
  if($dbrow=mysqli_fetch_assoc($sql_result)){
    echo "<div>$dbrow[name]</div>";
    echo "<div>$pid</div>";
    echo "<div class='d-flex justify-content-center align-items-center bg-light vh-100'>
    <form enctype='multipart/form-data' action='edit.php' method='get' class='w-50 bg-warning p-5'>
        <h3>EDIT PRODUCT</h3>
        <input class='form-control mt-3' type='text' name='name'  placeholder='$dbrow[name]'>
        <input class='form-control mt-2' type='text'  name='price'  placeholder='$dbrow[price]'>
        <textarea class='form-control mt-2' name='detail' id='' cols='30' rows='5' placeholder='$dbrow[detail]'></textarea>
        <input class='form-control mt-2' type='file'  name='pdtimg' accept='.jpg,.jpeg,.png'>
        <div class='text-center mt-3' >   
          <button class='btn btn-danger'>SAVE</button> 
          
        </div>";
  
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</html>

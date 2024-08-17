<?php
include "authguard.php" ;
 include "menu.html";

$source =$_FILES['pdtimg']['tmp_name'];
$dest="../shared/images/".$_FILES['pdtimg']['name'];
 move_uploaded_file($source,$dest); 
 $conn = new mysqli("localhost","root","", "ecommerce", "3306");
 $status= mysqli_query($conn,"insert into product(name,price,detail,impath,owner) values('$_POST[name]',$_POST[price],'$_POST[detail]','$dest',$_SESSION[userid])");
 if($status){
    echo "<div class='text-center display-3 text-success'>Product uploaded successfully</div>";
 }
 else{
    echo mysqli_error($conn);
 }
 
 // source of the file (temporary location)
?>
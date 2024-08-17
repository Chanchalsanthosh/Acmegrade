<?php
include "authguard.php" ;
 include "menu.html";
$pid=$_GET['pid'];
$source =$_FILES['pdtimg']['tmp_name'];
$dest="../shared/images/".$_FILES['pdtimg']['name'];
 move_uploaded_file($source,$dest); 
 $conn = new mysqli("localhost","root","", "ecommerce", "3306");

$sql_result=mysqli_query($conn,"UPDATE product set name='$_GET[name]', price=$_GET[price],deatil='$_GET[detail]',impath='$dest'  WHERE pid=$pid;");
if($sql_result){
    echo "<div class='text-center display-3 text-success'>Product edited successfully</div>";
    
}
else{
   echo mysqli_error($conn);
}

// source of the file (temporary location)
?>
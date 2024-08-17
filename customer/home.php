<?php

include "authguard.php";
include "menu.html";

$conn = new mysqli("localhost","root","", "ecommerce", "3306");
$sql_result = mysqli_query( $conn, "SELECT * FROM product join user on product.owner=user.userid");  //select all products
while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo "<div class='own_card'>
          <div>
            <img src='$dbrow[impath]'>          
          </div> 
          <div class='head'>$dbrow[name]</div>
          <div class='pr'>Rs.$dbrow[price]</div>
          <div class='det'>$dbrow[detail]</div>
          <div class='text-center'>VENDOR:$dbrow[username]</div>
          <div class='row rounded-xl text-center mt-2'>
          <a href='addcart.php?pid=$dbrow[pid]'>
          <button class='btn btn-warning rounded-l'>Add to Cart</button>
          </a>
          </div>
         </div> ";
}
?>




<html>
    <head>
        <style>
            body{
                background-color:#f7f6f2;
            }
            .own_card{
                width:300px;
                height:360px;
                display:inline-block;
                background-color:white;
                margin:10px;
                padding:5px;
                vertical-align:top;
                border:1px solid yellow;
                

            }
            .head{
                font-size:30px;
                font-weight:bold;
                text-align:center;
                margin-top:10px;

            }
            .pr{
                font-size:20px;
                text-align:center;

            }
            .det{
                font-size:15px;
                text-align:center;

            }
            img{
                width:100%;
                height:50%;
            }

        </style>    
    </head>
       
</html>    
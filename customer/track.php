<?php
include "authguard.php";
include "../shared/connection.php";
include "menu.html";

$sql_result=mysqli_query($conn,"SELECT * FROM order_details join orders on order_details.orderid=orders.orderid where userid=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo "<div class='own_card'>
          <div><img src='$dbrow[impath]'></div>
          <div class='head'>$dbrow[name]</div>
           <div class='pr'>RS.$dbrow[price]</div>
          <div class='display-7 text-danger text-center'>Delivery Status: $dbrow[order_status]</div>
         </div>";
}

?>
<html>
    <head>
        <style>
       
            .own_card{
                width:300px;
                height:360px;
                display:inline-block;
                background-color:bisque;
                margin:10px;
                padding:5px;
                vertical-align:top;
                

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
   <body>
   </body>  
   
</html>    

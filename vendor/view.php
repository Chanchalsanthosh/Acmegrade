<html>
    <head>
        <style>
            body{
                background-color:grey;
            }
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
</html>    





<?php
include "authguard.php";
include "menu.html";

$conn = new mysqli("localhost","root","", "ecommerce", "3306");
$sql_result = mysqli_query( $conn, "SELECT * FROM product where owner=$_SESSION[userid]");  //select all products
while($dbrow=mysqli_fetch_assoc($sql_result)){
    echo "<div class='own_card'>
          <div>
            <img src='$dbrow[impath]'>          
          </div> 
          <div class='head'>$dbrow[name]</div>
          <div class='pr'>Rs.$dbrow[price]</div>
          <div class='det'>$dbrow[detail]</div>
          <div class='mt-3 text-center w-10'>
         
          <button class='btn btn-danger p-1'  onclick='Deletepdt($dbrow[pid])'>Delete</button>
          
          <button class='btn btn-success ps-3 pe-3 pt-1' onclick='Editpdt($dbrow[pid])')>Edit</button>
          </div>
         </div> ";
}
?>

<html>
   <body>
   </body>  
   <script>
       function Deletepdt(pid){
        res=confirm("Are you sure to delete this product ?");
        if(res){
            window.location.href=`delete.php?pid=${pid}`;
        }
       }
       function Editpdt(pid){
        res=confirm("Are you sure you want to edit this product ?");
        if(res){
           window.location.href=`edits.php?pid=${pid}`;
        }
       }

    </script>  
</html>    
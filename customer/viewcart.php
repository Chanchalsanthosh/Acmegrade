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
   <body>
   </body>  
   <script>
       function Deletepdt(cartid){
        res=confirm("Are you sure to delete this product ?");
        if(res){
            window.location.href=`delete.php?cartid=${cartid}`;
        }
       }

    </script>  
  
</html>    

<?php
include "authguard.php";
include "menu.html";

$conn = new mysqli("localhost","root","", "ecommerce", "3306");
$sql_result = mysqli_query( $conn, "SELECT * FROM cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");  
$total=0;//select all products
while($dbrow=mysqli_fetch_assoc($sql_result)){
    $total=$total+$dbrow['price'];
    echo "<div class='own_card'>
          <div>
            <img src='$dbrow[impath]'>          
          </div> 
          <div class='head'>$dbrow[name]</div>
          <div class='pr'>Rs.$dbrow[price]</div>
          <div class='det'>$dbrow[detail]</div>
          <div class='text-center mt-3'>
         
          <button class='btn btn-danger p-1' onclick='Deletepdt($dbrow[cartid])'>Remove cart</button>
          
          </div>
         </div> ";


}
    echo "<div class='m-4 bg-dark text-white p-3 '>
           <form method='post' action='placeorder.php' class='w-50'>
           <h3>Place Order</h3>
           <textarea class='form-control' name='address' placeholder='Enter Delivery Address'></textarea>
           <input value='$total' hidden name='total'>
          <button class='p-3 btn btn-primary mt-2'>Place Order -Rs.$total</button>
          </form>
            </div>";     

?>


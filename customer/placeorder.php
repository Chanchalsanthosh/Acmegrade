<?php
$addr=$_POST['address'];
$total=$_POST['total'];

include "authguard.php";
include "../shared/connection.php";
include "menu.html";

$sql_status=mysqli_query($conn,"insert into orders(username,userid,address,total_amount) values('$_SESSION[username]',$_SESSION[userid],'$addr',$total)");
$orderid=$conn->insert_id;
$sql_result = mysqli_query($conn,"SELECT * FROM cart join product on cart.pid=product.pid where userid=$_SESSION[userid]"); 

while($dbrow=mysqli_fetch_assoc($sql_result)){
    $insert_status=mysqli_query($conn,"insert into order_details(orderid,pid,name,price,details,impath,owner) values($orderid,$dbrow[pid],'$dbrow[name]',$dbrow[price],'$dbrow[detail]','$dbrow[impath]',$dbrow[owner])");
    if(!$insert_status){
        echo mysqli_error($conn);
    }
    
}  
echo "<div class='text-center text-success mt-5 display-3'>Order Successfully placed</div>"; 

?>
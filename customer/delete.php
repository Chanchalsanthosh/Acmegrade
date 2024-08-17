<?php
$cartid=$_GET['cartid'];

include "../shared/connection.php";
$sql_result=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($sql_result){
    header("location:viewcart.php");

}
else{
    echo "failed to delete";
    echo mysqli_error($conn);
}

?>
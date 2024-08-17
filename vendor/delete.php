<?php
$pid=$_GET['pid'];
echo "Received ID=$pid";
include "../shared/connection.php";
$sql_result=mysqli_query($conn,"delete from product where pid=$pid");
if($sql_result){
    header("location:view.php");

}
else{
    echo "failed to delete";
    echo mysqli_error($conn);
}

?>
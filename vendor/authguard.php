<?php
session_start();
if(!isset($_SESSION['login_status'])){
    echo "Illegal LOgin bypassed";
    die;
}
if($_SESSION['login_status']==false){
    echo "Unauthorised Access, 403: Forbiden";
    die;
}
if($_SESSION['usertype']!='Vendor'){
    echo "Permission Denied,Authorization failed";
    die;
}

echo "<div class='d-flex justify-content-evenly bg-dark text-white p-3'>
       <div>
        $_SESSION[userid]
       </div>
       <div>
        $_SESSION[username]
       </div>
       <div> 
          <a href='../shared/logout.php'>Logout</a>
        </div>
       </div>";
?>
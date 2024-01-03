<?php

session_start();
require '../includes/function.php';
require '../includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}

$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];
$acctyp =  $_SESSION["Acc_type"];

if($acctyp != "Admin"){

    echo "<script> alert ('You are not an Admin') 
        location.href='../login.php';
    </script> " ;
}

?>

<?php

session_start();
require '../includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

if((isset($_GET['orderid']))&(isset($_GET['userid']))){
    $orderid = $_GET['orderid'];
    $cancelsql = "UPDATE Orders SET OrderStatus='Cancelled' WHERE order_id=$orderid" ;
        if($conn->query($cancelsql)){
                echo "Order Cancelled";
                header("Location:./orders.php?message=cancelled");
                }
                else{
                echo "Error:". $conn->error;
                header("Location:./orders.php?message=cancelfailed");
        }
   



}else{
    header("Location:./orders.php?message=accessesdenied");
}


$conn->close();
?>
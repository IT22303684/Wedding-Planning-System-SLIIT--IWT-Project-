<?php

session_start();
require 'includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

if((isset($_GET['cartid']))&(isset($_GET['userid']))&($UserID == $_GET['userid'])){
    $cartid = $_GET['cartid'];
    $delcartsql = "DELETE FROM Cart WHERE id=$cartid" ;
        if($conn->query($delcartsql)){
                echo "Removed";
                header("Location:./mycart.php?message=removed");
                }
                else{
                echo "Error:". $conn->error;
                header("Location:./mycart.php?message=removefailed");
        }
   



}else{
    header("Location:./mycart.php?message=accessesdenied");
}


$conn->close();
?>
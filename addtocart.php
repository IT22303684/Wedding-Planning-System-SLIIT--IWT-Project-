<?php

session_start();
require 'includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];


if((isset($_GET['packageid']))&(isset($_GET['userid']))&($UserID == $_GET['userid'])){
    $packageid = $_GET['packageid'];
    $qty = 1;
    $productsql = "SELECT * FROM package WHERE id = '$packageid'";
    $presult = $conn->query($productsql);

    
    if ($presult->num_rows> 0)
    {
        while($row = $presult->fetch_assoc())
        {
            $products[]=$row;
            
        }

    }
    else
    {
    echo "Package Not Found";
    header("Location:./mycart.php?message=productnotfound");
    } 

    foreach ($products as $products):
        $productname = $products["package_name"];
        $price = $products["package_price"];
        $description = $products["package_description"];

    endforeach;


    


    $addtocartsql = "INSERT INTO Cart(serviceName,Image,Price,description,category,user_id) 
                        VALUES ('$productname','', $price,'$description','', $UserID)";
                        
        if($conn->query($addtocartsql)){
                echo "Inserted successfully";
                header("Location:./mycart.php?message=addedtocart");
                }
                else{
                echo "Error:". $conn->error;
                 header("Location:./mycart.php?message=failedtoaddtocart");

               
        }


}else{
    header("Location:./mycart.php?message=accessesdenied");
}


$conn->close();
?>
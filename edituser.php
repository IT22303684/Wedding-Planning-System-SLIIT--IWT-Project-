<?php

session_start();
require 'includes/config.php';
require 'includes/function.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

    if (isset($_POST["submit"])) {
        $finame = $_POST["fname"];
        $laname = $_POST["lname"];
        $phone = $_POST["phone"];
        $Address = $_POST["address"];
        $city = $_POST["city"];
        $postalcode = $_POST["postalcode"];


        $updateusersql = "UPDATE user_details SET fname = '$finame' ,lname = '$laname' ,phone_No = '$phone' , address = '$Address' , city = '$city', postalcode = $postalcode WHERE User_id = $UserID ;";
        if($conn->query($updateusersql)){
            echo "<script> alert ('updated') </script> " ;
                
                header("Location:./myprofile.php?message=updateprofile");

 
                }
                else{
                
                header("Location:./myprofile.php?message=faile");

               
        }

        
        
} else {
    header("Location:./myprofile.php?message=submitFail");   //*** Prevent unauthorized access to this page ***
    exit();
}

?>


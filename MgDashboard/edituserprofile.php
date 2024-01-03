<?php

session_start();
require '../includes/function.php';
require '../includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: ../login.php?error=mustlogin");
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

$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];


    if (isset($_POST["submit"])) {
        $id = $_POST["userid"];
        $finame = $_POST["fname"];
        $laname = $_POST["lname"];
        $phone = $_POST["phone"];
        $Address = $_POST["address"];
        $city = $_POST["city"];
        $postalcode = $_POST["postalcode"];


        $updateusersql = "UPDATE user_details SET fname = '$finame' ,lname = '$laname' ,phone_No = '$phone' , address = '$Address' , city = '$city', postalcode = $postalcode WHERE User_id = $id ;";
        if($conn->query($updateusersql)){
            echo "<script> alert ('updated') 
            location.href='./edituser.php?userid=$id';
            
            </script> 
            
            
            " ;
                
                
                

 
                }
                else{
                
                    header("Location:./edituser.php?message=faile");
                

               
        }

        
        
} else {
    header("Location:./myprofile.php?message=submitFail");   //*** Prevent unauthorized access to this page ***
    exit();
}

?>
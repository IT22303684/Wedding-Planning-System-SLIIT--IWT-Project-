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

if($acctyp != "Admin" && $acctyp != "vendor"){

    echo "<script> alert ('You are not an Admin') 
        location.href='../login.php';
    </script> " ;
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wedding Whispers & Wonders</title>
        
		<link rel="stylesheet" href="./Style/logheader.css">
    </head>
    <body>
	
		<header>
            
            <img src="./images/logo/Logo.png" alt="logo" />
            <h1>Welcome</h1>

            <nav>
                <ul>
                    <a href="#"><img id="notify" src="./images/dashboard/notifi.png" alt="logo"/></a>
                    <a href="myprofile.html"><img id="prof" src="./images/dashboard/profile.png" alt="logo"/></a>
                    <a href="../includes/logout.php"><button type="button" id="lout">Logout</button></a>
                    
                
                </ul>
            </nav>
        </header>

       
        

    </body>  
</html>          
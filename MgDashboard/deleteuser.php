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


$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];
$id = $_GET["userid"];

	  if(isset($_GET["userid"])) { 
		
	
			 $sql1= "delete from user_details where user_id =$id"; 
			  
		   $conn->query($sql1);
		   ?>
			 <script>alert('Account Deleted Successfully');                    //*** JS part to give message ***
                location.href='./userprofile.php';
			 </script>
			 <?php 
		  }else{
		 
		 header("Location:./edituser.php?message=faile");
         $con->close();                                          //** Close connection with DB ***
	 }
                                            
	?>
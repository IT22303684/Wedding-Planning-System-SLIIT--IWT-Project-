<?php

session_start();
require 'includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

	  if(isset($_POST['submit'])) { 
		  
		   $pwd = $_POST['password']; 
        
           $sql = "select pwd from user_details where user_id =$UserID";
              $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $profile = array();
                        $profile["Password"] = $row["pwd"];
                    }
                }



		  
		   $encpwd = password_verify($pwd,$profile["Password"]);		// *** Get boolean value ***
		  
		  if($encpwd == true)
		  {
            
			 $sql1= "delete from user_details where user_id =$UserID"; 
			  
		   $conn->query($sql1);
		   ?>
			 <script>alert('Account Deleted Successfully');                    //*** JS part to give message ***
			 document.location='signup.php'
			 </script>
			 <?php 
		  }
		  else{
			  ?>
			 <script>alert('Enter correct password to delete account');                    //*** JS part to give message ***
			 document.location='myprofile.php'
			 </script>
			 <?php 
		  }

		  	  
	 }
	 
	 else{
		 
		 header("location: login.php?Error!!!");  
	 }
	$con->close();        //*** Close connection with DB ***
	?>
<?php
if(isset($_POST["submit"]))     	// To check if the form has been submitted
{
	$email = $_POST["email"];   // To get the email from the form
	$pwd=$_POST["pwd"];       // To get the password from the form
	
	require_once 'config.php';
	require_once 'function.php';
	
	if(emptyInputLogin($email,$pwd) !== false){                   // To check if the input is empty
        
		header("Location:../login.php?error=emptyinputs");             // To redirect to the login page with an error message
		exit();
	}
	
	Login_User($conn,$email,$pwd);                // To login the user
}
else{	
		header('Location:../login.php');              // To redirect to the login page
		exit();                                // To exit the script
}
<?php
if(isset($_POST["submit"])){

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];
    $repassword = $_POST["repassword"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postalcode = $_POST["postalcode"];


    

    require_once '../../includes/config.php';
    require_once '../../includes/function.php';

    $inputcheck = emptyInputsignup($fname,$email,$pwd ,$repassword);
    $emailExists = emailExists($conn, $email);
    $passwordMatch = passwordMatch($pwd,$repassword );
    $invalid_Email = invalid_Email($email);
    

    if(false !== $inputcheck){
        
        echo "<script> alert ('Fll all the forms') 
        location.href='../adduser.php';
        </script> " ;
        exit();
    }

    if(false !==  $emailExists){
        echo "<script> alert ('Email already exists') 
        location.href='../adduser.php';
        
        </script> " ;
        exit();
    }

    if(false !== $passwordMatch){
        echo "<script> alert ('password not match') 
        location.href='../adduser.php';
        </script> " ;
        exit();
    }

    if(false !== $invalid_Email){
        echo "<script> alert ('Invalid Email ') 
        location.href='../adduser.php';
        </script> " ;
        exit();
    }

    $encpwd = password_hash($pwd,PASSWORD_DEFAULT);

    $sql = "insert into user_details(user_id ,fname,lname,email,phone_No,pwd,gender,dob,address,city,postalcode) value('','$fname','$lname','$email','$phone','$encpwd','$gender','$dob','$address','$city','$postalcode')";

   

    if(mysqli_query($conn,$sql)) {
        echo "<script> alert ('insert completed') 
        location.href='../userprofile.php';
        </script> " ;
        
    }else {
        echo "<script> alert ('error in insert') 
        location.href='../userprofile.php';
        </script> " ;
    }



}else {
    header("location: ../signup.php?ERROR!!!!");    //*** Prevent unauthorized access to insert.php page ***
	   exit();


}

?>
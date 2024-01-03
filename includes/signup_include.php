<?php
if(isset($_POST["submit"])){  // To check if the form has been submitted

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


    

    require_once 'config.php';  // To connect to the database
    require_once 'function.php';   // To include the functions

    $inputcheck = emptyInputsignup($fname,$email,$pwd ,$repassword);  
    $emailExists = emailExists($conn, $email);   
    $passwordMatch = passwordMatch($pwd,$repassword );
    $invalid_Email = invalid_Email($email);
    $passwordpattern = passwordPattern($pwd);
    $phonepattern = checkphoneNum($phone);

    

    if(false !== $inputcheck){                        // To check if the input is empty
        
        echo "<script> alert ('Fll all the forms') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    if(false !==  $emailExists){          // To check if the email already exists
        echo "<script> alert ('Email already exists') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    if(false !== $passwordMatch){                     // To check if the password matches
        echo "<script> alert ('password not match') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    if(false !== $invalid_Email){                     // To check if the email is valid
        echo "<script> alert ('Invalid Email ') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    if(false !== $passwordpattern){                        // To check if the password is valid
        echo "<script> alert ('Invalid password! The password should be at least 6 characters long, contain at least one letter, and at least one number.') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    if(false !== $phonepattern){                // To check if the phone number is valid
        echo "<script> alert ('Invalid phone number! The phone number should be 10 digits long. (numbers only)') 
        location.href='../signup.php';
        </script> " ;
        exit();
    }

    $encpwd = password_hash($pwd,PASSWORD_DEFAULT);          // To encrypt the password


    // To insert the data into the database
    $sql = "insert into user_details(user_id ,fname,lname,email,phone_No,pwd,gender,dob,address,city,postalcode) value('','$fname','$lname','$email','$phone','$encpwd','$gender','$dob','$address','$city','$postalcode')";

   
    // To check if the data has been inserted
    if(mysqli_query($conn,$sql)) {
        echo "<script> alert ('signup completed') 
        location.href='../login.php';
        </script> " ;
        
    }else {
        echo "<script> alert ('error in insert')   // To check if there is an error in the insertion
        location.href='../signup.php';
        </script> " ;
    }



}else {
    header("location: ../signup.php?ERROR!!!!");    // Prevent unauthorized access to insert.php page
	   exit();


}

?>
<?php

function emptyInputsignup($fname, $email, $pwd, $repassword) {

    $result;
    if (empty($fname) || empty($email) || empty($pwd) || empty($repassword)){
        $result = true ;
    }else {
        $result = false ;
    }

    return $result ;
}

function passwordPattern($pwd) {

    $result;
    if (!preg_match("/^(?=.*[a-zA-Z])(?=.*\d).{6,}$/", $pwd)){
        $result = true ;
    }else {
        $result = false ;
    }

    return $result ;
}

function checkphoneNum($phone) {

    $result;
    if (!preg_match("/^[0-9]{10}$/", $phone)){
        $result = true ;
    }else {
        $result = false ;
    }

    return $result ;
}


function emailExists($conn, $email)
{
    $result;
    $sql = "SELECT * FROM user_details WHERE email = ? ;";
    $stmt = mysqli_stmt_init($conn) ;

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row ;
    }else {
        return false ;
    }

    mysqli_stmt_close($stmt);
}

function passwordMatch($pwd, $repassword)
{
    $result;
    if ($pwd !== $repassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalid_Email($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emptyInputLogin($email, $pwd)
{
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function login_User($conn, $email, $pwd)
{
    $emailExists = emailExists($conn, $email);
    if ($emailExists === false) {
        header("Location:../login.php?error=wronglogin");
        
        exit();
    }
    $pwdHashed = $emailExists["pwd"] ;
    $checkPWD= password_verify($pwd, $pwdHashed);

   

    if ($checkPWD === false) {
        echo "<script> alert ('Incorrect Email or Password') </script> " ;
        exit();
    } else if ($checkPWD === true) {
        session_start();
        $_SESSION["email"] = $emailExists["email"];
        $_SESSION["uid"] = $emailExists["user_id"];
        $_SESSION["fname"] = $emailExists["fname"];
        


        if($emailExists["Acc_type"] == "Admin"){
            header("Location:../MgDashboard/admin_dashboard.php");
            $_SESSION["Acc_type"] = $emailExists["Acc_type"];
            exit();
        }elseif($emailExists["Acc_type"] == "vendor") {
            header("Location:../MgDashboard/vendor_dashboard.php");
            $_SESSION["Acc_type"] = $emailExists["Acc_type"];
            exit();
        }else {
            echo "<script> alert ('Login sucessfully !!') 
            location.href='../myprofile.php';
            </script> " ;
            
        exit();
        }
        

        
    }
}


?>
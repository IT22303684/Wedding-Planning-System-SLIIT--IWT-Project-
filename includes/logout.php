<?php
session_start();               //Start session
session_unset();            //Unset session
session_destroy();            //Destroy session
header("Location:../index.php");      //Redirect to index page
exit();            //Exit script
?>
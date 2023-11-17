<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My profile</title>
        
        <link rel="stylesheet" href="./Style/logheader.css">

        
        
    </head>
    <body>

        <header>
            
                <img src="./Src/Images/logo/Logo.png" alt="logo" />
            
            
            <nav>
                <ul>
                    <a href="./home.php" class="test234"><li>Home</li></a>
                    <a href="./package.php"><li>Packges</li></a>
                    <a href="./service.php"><li>Services</li></a>
                    <a href="#customer"><li>Work</li></a>
                    <a href="./LogContact.php"><li>Contact</li></a>
                    <a href="./LogAboutus.php"><li>About</li></a>
                    <a href="./mycart.php"><li> <img src="./images/userprofile/cart-shopping-solid 1.png"  style="margin-right: 10px;" > Cart</li></a>
                    <a href="#"><li> <img src="./images/userprofile/Vector.png" style="margin-right: 10px;" > 
                    <a href= "./myprofile.php" style = "text-decoration:none">
                    <?php
                        if(isset($_SESSION["fname"])){
                            echo $_SESSION["fname"] ;
                        }else {
                            echo "User" ;
                        } ?>

                    </a>
                
                </li></a>
                    <a href="includes/logout.php"><li>Log out</li></a>
                </ul>
            </nav>
        </header>

</html>        
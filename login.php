<?php
include_once 'header.php';

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Style/Login_style.css">
        <title>Log in </title>
    </head>
    <body style="background-image: url(./images/background/main.png);">

        

        <main>
            <section class="main">
                <section class="main-section">
                    <div>
                        <img src="./images/Rectangle14.png">
                    </div>
                    <div>
                        <div>
                            <h1>Log in</h1>
                        </div>
                        <br> <br>

                        <div>
                            <div class = "login-form">
  
  <center><img src = "./images/login/user 1 (1).png"></center> <br> <br> <br>
                        <form action="includes/login_include.php" method = "post">
                            <input type="text" id = "email" name ="email" placeholder="email">
                            <input type="password" id = "password" name ="pwd" placeholder="password">
                            <button name = "submit" type="submit"><b>LOGIN</b></button>
                            <br><br>
                            <label > <h3 class="account-reg">Don't have an Account ? <a href="./signUp.php">Register</a> </label>
                            </h3>
                            </form>
                        </div>

                    </div>
                <?php
                    if(isset($_GET["error"])){
	                    if($_GET["error"]=="emptyinputs"){
                            echo "<script> alert ('Please Enter your login Details !!') </script>";
		                
	                }else if($_GET["error"]=="wronglogin"){
                        echo "<script> alert ('Incorrect Email or Password !!') </script>";
                    }
                }  ?>

                </section>

            </section>

        </main>

        <footer id="footer">
                <div>
                    <div>
                        <img src="./Src/Images/logo/white-logo.png" alt="">
                        <img src="./Src/Images/footer/Planner 1.png" alt="">
                        
                        <ul>
                            
                            <a href="./index.php"><li>Home</li></a>
                            <a href="./service.php"><li>Services</li></a>
                            <a href="./LogAboutus.php"><li>About</li></a>
                            <a href="#"><li>Work</li></a>
                            <a href="./LogContact.php"><li>Contact</li></a>
                            <a href="./privacy_policy.php"><li>Privacy Policy</li></a>
                            
                        </ul>
                        <ul>
                            <a href="#"></a><li>Facebook</li></a>
                            <a href="#"></a><li>Youtube</li></a>
                            <a href="#"></a><li>Instagram</li></a>
                            <a href="#"></a><li>Email</li></a>
                            <a href="#"></a><li>Call us</li></a>
                        </ul>
                    </div>
                    <h3>Quick links</h3>
                    <h3>Contact Us</h3>
                    <p>All Right Reserved - 2023 Designed by SLIIT Matara Center, Group 04</p>
                </div>
        </footer>

       

    </body>

    


</html>
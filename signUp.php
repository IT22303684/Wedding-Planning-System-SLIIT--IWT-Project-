<?php 
    require 'includes/config.php';
?>

<?php
    include_once 'header.php';
?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/signup_style.css">
        <title>sign Up</title>
    </head>
    <body style="background-image: url(./images/background/main.png);">

        
        

        <main>
        
            <section class="main">
                <section class="main-section">
                
                        <img src="./images/Rectangle14.png">
                    </div>
                    <div>
                        <div>
                            <h1>Sign Up</h1>
                        </div>
                        <br> <br>
                        
                        

                        <div class="login-form">
                            <form action="includes/signup_include.php" method="post">
                                <input type="text" id="fname" name="fname"
                                    placeholder="First Name" required>
                                <input type="text" id="lname" name="lname"
                                    placeholder="Last Name"><br>
                                <input type="text" id="email" name="email"
                                    placeholder="Email" required>
                                <input type="tel" id="phone" name="phone"
                                    placeholder="Phone"><br>
                                <input type="password" id="pwd" name="pwd"
                                    placeholder="password">
                                <input type="password" id="repassword"
                                    name="repassword"
                                    placeholder="re enter password"><br><br>
                                <label class="gender"> Gender:</label><br>
                                <label class="lbmale">Male: </label><input
                                    type="radio" id="male" name="gender"
                                    value="Male" required>
                                <label class="lbfemale">Female: </label><input
                                    type="radio" id="female"
                                    name="gender" value="Female"><br><br>
                                <label class="dob"> Date Of Birth:</label><input
                                    type="date" id="dob"
                                    name="dob" placeholder="Last Name" required><br>
                                <input type="text" id="address" name="address"
                                    placeholder="Address" required>
                                <input type="text" id="city" name="city"
                                    placeholder="City" required>
                                <input type="number" id="postalcode"
                                    name="postalcode" placeholder="Postal Code"
                                    required>
                                <br>

                                <input type="checkbox" id="confirm"
                                    name="confirm" checked="checked" required>By
                                clicking I agreed to <a href="#">terms &
                                </a> and <a href="#">Privacy
                                    Policy</a><br>

                                <button name="submit" type="submit"><b>Register</b></button>
                            </form>
                        </div>

                    </div>

                </section>

            </section>

            
                <!-- <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"]== "emptyinput"){
                            echo '<div class="error" style = "text-align: center; padding-top: 24px;font-size: 24px;color: red;">
                            Fill all the blanks
                             </div>
                    <div>';
                        }
                    }

                    ?> -->

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
<?php 
    require '../includes/config.php';
?>


<?php
include_once 'LogHeader.php';

?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Style/adduser.css">
        <title>Add user</title>
    </head>
    <body style="background-image: url(./images/background/main.png);">

        
        

        <main>
        
            <section class="main">
                <center>
                <section class="main-section">
                
        
                    </div>
                    <div>
                        <div>
                            <center><h1 class="adduser">Add user</h1> </center>
                        </div>
                        <br> <br>
                        
                        

                        <div class="login-form">
                            <form action="./admin-includes/signup_include.php" method="post">
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
                                    <input type="hidden" name="admin" value="admin">
                                <br>
<br>

                                <button name="submit" type="submit"><b>Add User</b></button>
                            </form>
                        </div>

                    </div>

                </section>

            </section>
            </center>

            
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

      <?php
        include_once 'footer.php';
        ?>
       

    </body>

    


</html>
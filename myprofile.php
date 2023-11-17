<?php
include_once 'logHeader.php';

?>

<?php

require 'includes/config.php';
require 'includes/function.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

?>


<?php

        $sql = "Select * from user_details where user_id = $UserID " ;
        $result = $conn->query($sql) ;

        if($result->num_rows > 0){

                while($row = $result->fetch_assoc()){
                    $profile = array();
                    $profile["UserID"] = $row["user_id"];
                    $profile["FirstName"] = $row["fname"];
                    $profile["LastName"] = $row["lname"];
                    $profile["Phone"] = $row["phone_No"];
                    $profile["Address"] = $row["address"];
                    $profile["City"] = $row["city"];
                    $profile["PostalCode"] = $row["postalcode"];
                    
                }

        }else {
                echo "empty table";
        }

        $conn->close() ;

?>



<link rel="stylesheet" href="./Style/myprofile.css">


        <main>
            <section class="main-banner">
                <div>
                   <center> <img src="./images/userprofile/icon-256x256 1.png" style="margin-top: 15px;" >
                    <div class="welcome-msg" >
                        <h2>Hello !! 
                    <?php
                        if(isset($_SESSION["fname"])){
                            echo $profile["FirstName"] ;
                        }else {
                            echo "User" ;
                        } ?>
                            
                        
                        Welcome Back </h2>
                    </div>
                    
                </center>
                </div>
                

            </section>

            <div class="user-container">
                <div class="user-sidebar">
                  <ul class="user-menu">
                  <li><a href="./myprofile.php">My Details</a></li>
                    <li><a href="./myorders.php">My Orders</a></li>
                    <li><a href="./mycart.php">My Cart</a></li>
                  </ul>
            </div>


            







            



                <section class="details-section">
                    <div class="welcome-msg" >
                         <center><h2 style="margin-top: 30px;">My Profile</h2> </center>
                    </div>
                    

                    <div class="my-details">
                        <center><h2 style="margin-top: 12px;">My Details</h2> </center>

                        

                        <div class="detail-container">
                            
                            <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>User ID:<?php echo " ".$profile["UserID"];?></strong></p>
                            <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>Name: <?php echo " ".$profile["FirstName"]." ".$profile["LastName"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/phone-solid 1.png" style="margin-right: 10px;"><strong>Phone:<?php echo " ".$profile["Phone"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/house-solid 1.png" style="margin-right: 10px;"><strong>Address: <?php echo " ".$profile["Address"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/city-solid 1.png" style="margin-right: 10px;"><strong>City:<?php echo " ".$profile["City"];?> </strong></p>
                            <p><img src="./images/userprofile/icons/envelopes-bulk-solid 1.png" style="margin-right: 10px;"><strong>Postal Code: <?php echo " ".$profile["PostalCode"];?> </strong></p>
                          
                          </div>
                    </div>


                        <div class="delete-account">
                            <center><h2 style="margin-top: 12px;">Delete Account</h2> </center>
                            <div class="delete-container">
                                <p>Are you sure you want to delete your account?</p>
                                <div class="delete">
                                    <button onclick="myFunction()" class="delete-btn">Delete</button>
                                    
                                </div>

                                

                                  <script>
                                    function myFunction() {
                                                 if (confirm("Are you sure you want to delete your account?")) {
                                                 // Display the form if the user pressed OK
                                            document.getElementById('deleteForm').style.display = 'block';
                                                 } else {                                              // Otherwise, hide it
                                            document.getElementById('deleteForm').style.display = 'none';
                                                 }
                                                }
                                            
                                </script>


                                

                                

                            </div>
                        </div>







                    <form action = "./edituser.php" method = "POST">
                <div class= "edit-details">
                   <center> <h2 style="margin-top: 10px;">Edit Details</h2></center> 
                   <div class="edit-container">
                   <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>FirstName:</strong></p><input type = "text" name= "fname" value= "<?php echo $profile["FirstName"] ?>">
    <p><img src="./images/userprofile/icons/user-solid (1) 1.png" style="margin-right: 10px;"><strong>LastName:</strong></p><input type = "text" name= "lname" value= "<?php echo $profile["LastName"] ?>" >
    <p><img src="./images/userprofile/icons/phone-solid 1.png" style="margin-right: 10px;"><strong>Phone:</strong></p><input type="tel" name="phone" value= "<?php echo $profile["Phone"] ?>">
    <p><img src="./images/userprofile/icons/house-solid 1.png" style="margin-right: 10px;"><strong>Address:</strong></p> <textarea id="address" name="address" rows="4" cols="50" style="margin-left: 30px;"> <?php echo $profile["Address"] ?></textarea>
    <p><img src="./images/userprofile/icons/city-solid 1.png" style="margin-right: 10px;"><strong>City:</strong></p><input type = "text" name= "city" value= "<?php echo $profile["City"] ?>" >
    <p><img src="./images/userprofile/icons/envelopes-bulk-solid 1.png" style="margin-right: 10px;">Postal Code:</strong> <input type ="number" id="postalcode" name="postalcode" value= "<?php echo $profile["PostalCode"] ?>" >
    <br><div class = "update"><input type="submit" name = "submit" value="UPDATE" class="submit"></div>
    </div>
        </form>


        <form id="deleteForm" style="display: none;" action="./deleteaccount.php" method="POST">
                                    <label>Enter your password to confirm</label>
                             <input type="password" name="password" placeholder="Enter your password">
                                <input type="submit" name="submit" value="DELETE" class="submit">
                                  </form>


        <?php
if(isset($_GET["message"])){
	if($_GET["message"]=="updateprofile"){
		echo "<script> alert ('update sucessfully') </script>";
	}else {

    }
}  ?>

    
    


                </section>


        </main>


     
        

    </body>
</html>

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
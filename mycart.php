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

<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
      
    
</style>


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

       

?>








                



<link rel="stylesheet" href="./Style/myprofile.css">
<link rel="stylesheet" href="./Style/mycart.css">


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
                         <center><h2 style="margin-top: 30px;">My Cart</h2> </center>
                    </div>
                    <center><img src="./images/checkout/cart-s.png" style="margin-top: 15px; margin-bottom: 15px;" ></center>

                    
        <?php
          if(isset($_GET["message"])){
            if($_GET["message"]=="accessesdenied"){
              echo'<div class = "message error">suspicious attempt detected!</div>';
            }elseif($_GET["message"]=="removed"){
                echo "<script> alert ('Product successfully! Removed from your Cart') </script>";
            }elseif($_GET["message"]=="removefailed"){
              echo'<div class = "message error">remove product Failed!</div>';
            }elseif($_GET["message"]=="addedtocart"){
              echo "<script> alert ('Product successfully!Added to your cart !') </script>";
            }elseif($_GET["message"]=="failedtoaddtocart"){
              echo'<div class = "message error">add product to cart: Failed!</div>';
            }
            elseif($_GET["message"]=="productnotfound"){
              echo'<div class = "message error">Product Not Found!</div>';
            }
          }

          $sql = "SELECT * from cart where user_id =$UserID ORDER BY id DESC " ;
            $cartresult = $conn->query($sql) ;
          
          if ($cartresult->num_rows > 0) {
            while ($row = $cartresult->fetch_assoc()) {
                $cart[]=$row;
            } ?>



       
       
       
        

                
<table>
    <thead>
        <tr>
            <th>Service Name</th>
            <th>Service Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($cart as $cart): ?>
   
        <tr>
            <td><?php echo $cart['serviceName']." Package" ?></td>
            <td><?php echo $cart['description'] ?></td>
            <td><?php echo $cart['Price'] ?></td>
            <td>
                        
                        <div id="edit-btn">
                        <a href = "checkout.php?servicename=<?php echo $cart['serviceName']."&userid=".$cart['user_id']."&cartid=".$cart['id']?>"><button id="edit-btn">Checkout</button></a>
                        
                        </div>
                        <div id = "delete-btn">
                        <a href = "deletecart.php?cartid=<?php echo $cart['id']."&userid=".$cart['user_id']?>"><button id="delete-btn">Remove Item</button></a>
                        </div>
                        
                    </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
              }
              else
              {
              echo "No Items Found on Your Cart";
              }

       
    
              $conn->close();

     ?> 

            

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
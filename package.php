<?php
include_once 'logHeader.php';
include_once './includes/config.php';
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



  


<form action="addtocart.php" method="GET">

        <link rel="stylesheet" href="./Style/package.css">


        <main style="background-image: url(./images/packages/4ab0e0b66c.jpg);">
            <div>
                <center><h1 style="padding-bottom: 5px;"> Our Packages</h1></center>
            </div>

            <section class="main-box">

           
    <?php 

                $sql = "select * from package";
                $result = $conn->query($sql);

                $package_ID;
                $packageName;
                $packagePrice;
                $packageDes;

                

                $sql = "SELECT * FROM package";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $package_ID = $row["id"];
                        $packageName = $row["package_name"];
                        $packagePrice = $row["package_price"];
                        $packageDes = $row["package_description"];
                        ?>
                
                        <div class='package_card'>
                            <div>
                                <h2><?php echo $packageName; ?></h2>
                                <h5>Package</h5>
                            </div>
                            <div class='price'>
                                Rs <?php echo $packagePrice; ?>
                            </div>
                            <div class='discription'>
                                <p><?php $sentences = explode('.', $packageDes);
                        
                                    foreach ($sentences as $sentence) {
                                        $sentence = trim($sentence);

                                        if (!empty($sentence)) {
                                            echo "<li>$sentence</li>";
                                        }
                                    } 
                                    ?>
                                </p>
                            </div>
                            <div>
                                <form action='addtocart.php' method='GET'>
                                    <input type='hidden' name='packageid' value='<?php echo $package_ID; ?>'>
                                    <input type='hidden' name='userid' value='<?php echo $UserID; ?>'>
                                    <input type='submit' id='submit-btn' class='see_more' value='Add to Cart'>
                                </form>
                            </div>
                        </div>
                
                        <?php
                    }
                } else {
                    echo "Packages not found!";
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
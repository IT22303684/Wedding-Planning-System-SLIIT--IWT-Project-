<?php
	include_once '../includes/config.php';
    include_once './logHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wedding Whispers & Wonders</title>
        <link rel="stylesheet" href="./Style/Dashboard.css">
        <script type="text/javascript" src="JS/script.js"></script>
    </head>
    <body>

    <main>

        <div id="top">
            <h1>Dashboard</h1>
        </div>

        <ul class="nav-menu">
            <li><a href="#home">Orders</a></li>
            <li><a href="vendor_services.php">Published Services</a></li>
            <li><a href="vendor_services.php">Add Services</a></li>
        </ul>

        <div class="content">
            <a href="#">
                <div class="box">
                    <img src="./Images/dashboard/cart.png" alt="Orders"/>
                    <h2>Orders <br> 10</h2>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img src="./Images/dashboard/enquiry.png" alt="Enquiries"/>
                    <h2>Enquiries <br> 02</h2>
                </div>
            </a>
            <a href="vendor_services.php">
                <div class="box">
                    <img src="./Images/dashboard/services.png" alt="Services"/>
                    <h2>Services <br> 15</h2>
                </div>
            </a>
        </div>
        
    </main>

    <footer id="footer">
        <div>
            <div>
                <img src="./Images/footer/white-logo.png" alt="">
                <img src="./Images/footer/Planner 1.png" alt="">
                
                <ul>
                    
                    <a href="../index.php"><li>Home</li></a>
                    <a href="../service.php"><li>Services</li></a>
                    <a href="../LogAboutus.php"><li>About</li></a>
                    <a href="#"><li>Work</li></a>
                    <a href="../LogContact.php"><li>Contact</li></a>
                    <a href="../privacy_policy.php"><li>Privacy Policy</li></a>
                    
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
<!--  Admin Dashboard -->


<?php	    
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
            <li><a href="orders.php">Orders</a></li>
            <li><a href="userprofile.php">Users</a></li>
            <li><a href="#contact">Vendors</a></li>
			<li><a href="package.php">Packages</a></li>
        </ul>

        <div class="content">
            <a href="#">
                <div class="box">
                    <img src="./images/dashboard/cart.png" alt="Orders"/>
                    <h2>Orders <br> 10</h2>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img src="./images/dashboard/users.png" alt="Manage Users"/>
                    <h2>Users <br> 02</h2>
                </div>
            </a>
            <a href="#">
                <div class="box">
                    <img src="./images/dashboard/services.png" alt="Manage Vendors"/>
                    <h2>Vendors <br> 15</h2>
                </div>
            </a>
        </div>
        
    </main>

    <?php
             include_once 'footer.php';

    ?>

    </body>
</html>

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
    </head>
    <body>

    <main>

        <div id="top">
            <h1>Vendor Service</h1>
        </div>

        <ul class="nav-menu">
            <li><a href="#home">Orders</a></li>
            <li><a href="vendor_services.php">Published Services</a></li>
            <li><a href="#">Add Services</a></li>
        </ul>

        <div class="content">
            <?php
                // CRUD Operations

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    if (isset($_POST['create'])) {
                        // Create a new vendor service
                        $name = $_POST['Service_Name'];
                        $type = $_POST['Service_Type'];
                        $price = $_POST['Service_Price'];
                        $description = $_POST['Service_Description'];
                
                        $sql = "INSERT INTO Service (Service_Name, Service_Type, Service_Price, Service_Description) VALUES ('$name', '$type', '$price', '$description')";
                        $conn->query($sql);
                    } elseif (isset($_POST['upd'])) {
                        // Update an existing service
                        $id = $_POST['Service_ID'];
                        $name = $_POST['Service_Name'];
                        $type = $_POST['Service_Type'];
                        $price = $_POST['Service_Price'];
                        $description = $_POST['Service_Description'];
                
                        $sql = "UPDATE Service SET Service_Name='$name', Service_Type='$type', Service_Price='$price', Service_Description='$description' WHERE Service_ID=$id";
                        $conn->query($sql);
                    } elseif (isset($_POST['delete'])) {
                        // Delete a service
                        $id = $_POST['Service_ID'];
                        $sql = "DELETE FROM Service WHERE Service_ID=$id";
                        $conn->query($sql);
                    }
                }
            ?>

            <button id="addService">Add a Service</button>

            <!-- Add Service Form -->
            <div id="popup" class="popup">
                <span class="close" id="closePopup">&times;</span>
                <form class="popup-content" method="POST">
                    <h2>Add a Service</h2>
                    <label for="Service_Name">Service Name</label><br>
                    <input type="text" id="Service_Name" name="Service_Name" placeholder="Enter the service name" required>
                    <br><br>
                    <label for="Service_Type">Service Type</label><br>
                    <input type="text" id="Service_Type" name="Service_Type" placeholder="Enter the service type" required>
                    <br><br>
                    <label for="Service_Price">Service Price</label><br>
                    <input type="text" id="Service_Price" name="Service_Price" placeholder="Enter the service price" required>
                    <br><br>
                    <label for="Service_Description">Service Description</label><br>
                    <textarea id="Service_Description" name="Service_Description" rows="4" cols="50" placeholder="Enter the service description" required></textarea>
                    <br><br>
                    <button type="submit" id="create" name="create">Create</button>
                </form>
            </div>

            <!-- List of Services -->
            <br>
            <h2>Published Services</h2>
            <br>
            <table class="services-tbl">
                <tr>
                    <th>ID</th>
                    <th>Service Name</th>
                    <th>Service Type</th>
                    <th>Service Price</th>
                    <th>Service Description</th>
                    <th id="act">Action</th>
                </tr>
                <?php
                $result = $conn->query("SELECT Service_ID, Service_Name, Service_Type, Service_Price, Service_Description FROM Service");
                while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['Service_ID']; ?></td>
                    <td><?php echo $row['Service_Name']; ?></td>
                    <td><?php echo $row['Service_Type']; ?></td>
                    <td><?php echo $row['Service_Price']; ?></td>
                    <td><?php echo $row['Service_Description']; ?></td>
                    <td>
                        <form method="POST">
                            <!-- Update Service Form -->
                            <div id="editPopup" class="editPopup">
                                <div id="dd">
                                <span class="close" id="editClose">&times;</span>
                                <form class="popup-content" method="POST">
                                    <h2>Update Service</h2>
                                    <label for="Service_Name">Service Name</label><br>
                                    <input type="text" id="Service_Name" name="Service_Name" placeholder="Enter the service name" required>
                                    <br><br>
                                    <label for="Service_Type">Service Type</label><br>
                                    <input type="text" id="Service_Type" name="Service_Type" placeholder="Enter the service type" required>
                                    <br><br>
                                    <label for="Service_Price">Service Price</label><br>
                                    <input type="text" id="Service_Price" name="Service_Price" placeholder="Enter the service price" required>
                                    <br><br>
                                    <label for="Service_Description">Service Description</label><br>
                                    <textarea id="Service_Description" name="Service_Description" rows="4" cols="50" placeholder="Enter the service description" required></textarea>
                                    <br><br>
                                    <input type="hidden" name="Service_ID" value="<?php echo $row['Service_ID']; ?>">
                                    <button type="submit" id="upd" name="upd">Update</button>
                                </form>
                                </div>
                            </div>

                            <input type="hidden" name="Service_ID" value="<?php echo $row['Service_ID']; ?>">
                            <button type="submit" id="update" name="update">Update</button>
                        </form>
                        <form method="POST">
                            <input type="hidden" name="Service_ID" value="<?php echo $row['Service_ID']; ?>">
                            <button type="submit" id="delete" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        
    </main>

    <footer id="footer">
        <div>
            <div>
                <img src="./Src/Images/logo/white-logo.png" alt="">
                <img src="./Src/Images/footer/Planner 1.png" alt="">
                
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

    <script src="./JS/popup.js"></script>
    </body>
</html>
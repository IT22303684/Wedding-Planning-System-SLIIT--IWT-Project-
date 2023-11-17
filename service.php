<?php
include_once 'LogHeader.php';
include_once './includes/config.php';

if(!isset($_SESSION["email"]) & empty($_SESSION["email"])){
    header("Location: login.php?error=mustlogin");
}
$UserID = $_SESSION["uid"];
$fname = $_SESSION["fname"];

?>

    <title>Wedding Planner</title>
    <link rel="stylesheet" href="./Style/service.css">
        
        <script src = "Js/service.js" > </script>
      
        <section class="vendor" id="vendor">
            <div class="title">
                <br>
                <h1 id="topic1">Services</h1><br>
            </div>
            <div class="vendor-list">
                <?php

                $sql = "SELECT * FROM service";
                $result = $conn->query($sql);

                // Check if the query was successful.
                if (!$result) {
                    die("Database query failed.");
                }

                // Loop through the results and generate a card for each service.
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="vendor-row">';
                    // echo '<img src="' . $row['Image'] . '" alt="Img">';
                    echo '<h2 id="type">' . $row['Service_Type'] . '</h2>';
                    echo '<p>' . $row['Service_Description'] . '</p>';
                    echo '<h3 id="name">' . $row['Service_Name'] . '</h3>';
                    echo "<form action='addtocart.php' method='GET'>
                    <input type='hidden' name='service_id' value='". $row['Service_ID']."'>
                    <input type='hidden' name='userid' value='".$UserID."'>
                    <input type='submit' id='btn' class='btn' value='Add to Cart'>
                </form>";
                    echo '</div>';
                }
                ?>
                
            </div>
        </section>


       <?php
             include_once 'footer.php';

        ?>


    </body>
</html>

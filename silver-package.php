<?php
include_once './includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>plantinum package</title>
        <link rel="stylesheet" href="./Style/plantinum-package.css">
    </head>
    <body>

        <header>
            
                <img src="./Src/Images/logo/Logo.png" alt="logo" />
            
            
            <nav>
                <ul>
                    <a href="./index.html" class="test234"><li>Home</li></a>
                    <a href="package.html"><li>Packges</li></a>
                    <a href="service.html"><li>Services</li></a>
                    <a href="#customer"><li>Work</li></a>
                    <a href="contact.html"><li>Contact</li></a>
                    <a href="#footer"><li>About</li></a>
                    <a href="./login.html"><li>Login</li></a>
                    <a href="./signUp.html"><li>Sign up</li></a>
                </ul>
            </nav>
        </header>


        <main>

        <?php
            $sql = "SELECT * FROM package";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $packageName = $row["package_name"];
                $packagePrice = $row["package_price"];
                $packageDes = $row["extra"];

                echo "
                    <div class='pk-name'>
                        <center> <h1> $packageName </h1></center>
                    </div>
                    <div class='dis-1'>
                        <center> Do you have a busy schedule and 
                            little or no time to plan that special day? <br> 
                            Or do you just want to relax and take the pressure 
                            off of planning your special day? This plan is for you.</center>
                    </div>

                    <div class='dis-2'>
                        The Platinum Wedding Package includes:- <br> <br>

                        <ul>";
                        $sentences = explode('.', $packageDes);
                        
                        foreach ($sentences as $sentence) {
                            $sentence = trim($sentence);

                            if (!empty($sentence)) {
                                echo "<li>$sentence</li>";
                            }
                        }
                        echo "
                        </ul>";
            } 
            else {
                echo "Packages not found !!";
            }

            $conn->close();
        ?>
                    <br><br>

                    <section class='vendor' id ='vendor'>

                        <div class ='vendor-list'>
                            <div class='vendor-row'>           
                                <img src='images/packages/img-1-1.jpg' alt='>             
                            </div>
                            <div class='vendor-row'>            
                                <img src='images/packages/img-1-2.jpg' alt='>       
                            </div>
                            <div class='vendor-row'>            
                                <img src='images/packages/img-1-3.jpg' alt='>      
                            </div>

                            <div class='vendor-row'>            
                                <img src='images/packages/img-1-4.jpg' alt='>            
                            </div>

                            <div class='vendor-row'>            
                                <img src='images/packages/img-1-5.jpg' alt='>            
                            </div>
                            <div class='vendor-row'>            
                                <img src='images/packages/img-1-6.jpg' alt='>            
                            </div>        
                        </div> 
                        
                    </section>
                </div>
            
        


            <div class="buttons">
                <button>
                    <h5>ADD TO CART </h5> 
                </button>

                <button>
                    <h5>CHECK ADD-ONS </h5> 
                </button>
            </div>
            


        </main>

        <?php
             include_once 'footer.php';

        ?>

    </body>
</html>
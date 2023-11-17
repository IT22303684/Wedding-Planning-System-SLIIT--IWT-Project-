<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./Style/contact.css">
        <title>Contact Us Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <style>
            body {
              background-image: url('./images/contact/bg.jpeg');
            }
        </style>
    </head>    
    <body>
        <header>
                
                <img src="./Src/Images/logo/Logo.png" alt="logo" />
            
            
            <nav>
                <ul>
                    <a href="./home.php" class="test234"><li>Home</li></a>
                    <a href="./package.php"><li>Packges</li></a>
                    <a href="service.php"><li>Services</li></a>
                    <a href="#customer"><li>Work</li></a>
                    <a href="LogContact.php"><li>Contact</li></a>
                    <a href="./LogAboutus.php"><li>About</li></a>
                    <a href="./mycart.php"><li> <img src="./images/userprofile/cart-shopping-solid 1.png"  style="margin-right: 10px;" > Cart</li></a>
                    <a href="#"><li> <img src="./images/userprofile/Vector.png" style="margin-right: 10px;" > 
                    <a href= "./myprofile.php" style = "text-decoration:none">
                    <?php
                        if(isset($_SESSION["fname"])){
                            echo $_SESSION["fname"] ;
                        }else {
                            echo "User" ;
                        } ?>

                    </a>
                
                </li></a>
                    <a href="includes/logout.php"><li>Log out</li></a>
                </ul>
            </nav>
        </header>
        <section class = "contact">
            
            <div class = "content">
                <h2>Get in Touch</h2>                    
            </div>

            <div class = "container">
                <div class = "contactInfo">
                    <div class ="box">
                        <div class = "icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Walawwtatta, Uda kirinda,<br>Matraa, sri lanka</p>
                        </div>
                    </div>

                    <div class ="box">
                        <div class = "icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>0713584785</p>
                        </div>
                    </div>

                    <div class ="box">
                        <div class = "icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>name@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send a Massage</h2>
                        
                            
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type = "text" name = "" required="required">
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type = "text" name = "" required="required">
                                </div>                      
                                                     
                                <div class="inputBox">
                                    <span>Email</span>
                                    <input type = "text" name="" required="required">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type = "text">
                                </div>                             
                            
                                <div class="inputBox">
                                    <span>Write your message here</span>
                                    <textarea required ="required"></textarea>
                                </div>             
                           
                                <div class="inputBox">
                                    <input type = "submit" name="" value = "Send">
                                </div>                           
                        
                    </form>

                </div>

                <div class = "map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.88888095759!2d79.95023747771116!3d6.903889700847703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2572db04b0c9f%3A0xd609386dfe4a5d1!2sMalabe%20Junction%20Clock%20Tower%2C%20B263%2C%20Malabe!5e0!3m2!1sen!2slk!4v1695914760554!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div> 
            
            
        </section>  
        
        <?php
             include_once 'footer.php';

        ?>
                

    </body>
</html>
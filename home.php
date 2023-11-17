
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




<link rel="stylesheet" href="./Style/style.css">



        <main>
            <section class="hero-section">
                <div class="section1"></div>
                <img src="./Src/Images/Main-section/1 1 (2).jpg" />
                <h1 class="main-head">Your Wedding Planner Awaits</h1>
                <p>Make Your wedding Memorable..</p>
               
            </section>

            

            <section class="services" id="services" >
                <h2>Our Services</h2>
                <div>
                    <div class="services-card card1">
                        <div></div>
                    <img src="./Src/Images/services//Rectangle_4_(1).png" />
                    <h2>Venues</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>

                    <div class="services-card card2">
                        <div></div>
                    <img src="./Src/Images/services/Rectangle_4_(2).png" />
                    <h2>DRESSES</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>

                    <div class="services-card card3">
                        <div></div>
                    <img src="./Src/Images/services/Rectangle_4_(3).png" />
                    <h2>MUSIC</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>

                    <div class="services-card card4">
                        <div></div>
                    <img src="./Src/Images/services/Rectangle_4_(4).png" />
                    <h2>VEHICLES</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>

                    <div class="services-card card5">
                        <div></div>
                    <img src="./Src/Images/services//Rectangle_4_(5).png" />
                    <h2>CATERING</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>

                    <div class="services-card card6">
                        <div></div>
                    <img src="./Src/Images/services/Rectangle_4_(6).png" />
                    <h2>PHOTOS</h2>
                    <p>Lorem ipsum dolor sit amet, consec
                        tetur adipiscing elit, sed do  
                        Ut enim ad minim veniam, quis  u</p>
                    </div>
                </div>
                <br>

                <div class="see-more-btn">
                    <button>See More</button>
                 </div>
    
            </section>


            

          

            <section class="happy-customer" id="customer">
                <h2>Our Happy Customers</h2>

                <div class="customer">
                    <img src="./Src/Images/happy-customer/customer1.png" alt="customer">
                    <div>
                       <p>Went to MyWedding based on a recommendation by a friend.
                        Was not disappointed at all.
                         While there wasn't a huge 
                       selection of gowns,
                       throughout our wedding journey.
                        When we require something, she does not hesitat
                        to provide us with the right recommendation or help
                        us to find a solution. On the wedding day
                        she and Lim, our photographer, worked tirelessly.
                         When we were lost with the chinese customs, they
                        stepped in with the right suggestions to help us move on. Thank you both (especially Yu Ting) for 
                       helping to capture all the fantastic moments and making our wedding a memorable one.
                       Went to MyWedding based on a recommendation by a friend.
                       Was not disappointed at all.
                        While there wasn't a huge 
                      selection of gowns,
                      throughout our wedding journey.
                       When we require something, she does not hesitat
                       to provide us with the right recommendation or help
                       us to find a solution. On the wedding day
                       she and Lim, our photographer, worked tirelessly.
                        When we were lost with the chinese customs, they
                       stepped in with the right suggestions to help us move on. Thank you both (especially Yu Ting) for 
                      helping to capture all the fantastic moments and making our wedding a memorable one</p>
                    </div>
                </div>
            </section>

            <!-- <section class="about">
                <h2>About us</h2>
                <div>
                    <div>
                        <div class="about1">
                            WE ARE HERE TO ASSIST YOU ON YOUR VERY SPECIAL DAY.
                        </div>
                      <div class="about2">
                        We are dedicated to documenting every precious moment,
                            create beautiful memories of love on 
                            your most significant day!
                            We also provide bespoke gown service. 
                            We specialise in designing and crafting the dress of your
                             dreams, an exquisite gown created uniquely yours, bringing your dream dresses to life!</p>
                      </div>

                    </div>
                    <img src="./Src/Images/about/about2.jpg" alt="about"/>
                </div>
            </section> -->


        </main>

        <?php
             include_once 'footer.php';

        ?>

    </body>
</html>
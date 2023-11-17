<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Style/aboutus.css">
        <title>About Us</title>
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
        
            <main>
            <style>
                body {
                  background-image: url('./images/contact/pexels-irina-iriser-1408221.jpg');
                    
                }
             </style>

    <div class="about_us">

             <h1>About Us</h1>

             <section>
                <h2>Who are we!</h2>
                <p>Welcome to our world of wedding magic! At Wedding Whispers & Wonders,
                   we are your trusted partner in transforming your dream wedding into a reality. 
                  Our journey began with a simple yet profound idea 
                  - to make the process of planning one of the most special days of your life as smooth and delightful as possible.</p>
                  <br>
                  <p>we're more than just event coordinators; we're the dreamweavers of your love story. With every lace doily, 
                    floral arrangement, and enchanting venue we choose, we're crafting a masterpiece that celebrates the unique love
                     that brought you together. Our passion lies in the details, and we pride ourselves on curating weddings that
                      reflect your personality, your dreams, and your love story. We believe that your special day should be a reflection of you,
                       a day when every element tells a story, and every moment is a memory to be cherished. Our mission is to turn your wedding day
                        into a timeless work of art, a day that leaves you and your guests spellbound, and a memory that lingers in your hearts forever. 
                        Let us be the architects of your love story, and together,
                     we'll create a celebration that's as extraordinary as the love you share.where we transform your dreams into reality, one wedding at a time.</p>
            </section>
            <br>
            <section>
                <h2>Our Story</h2>
                <p>Founded by a team of passionate and experienced wedding enthusiasts, 
                  Wedding Whispers & Wonders was born out of a desire to simplify the often overwhelming journey 
                  of planning a wedding. We understand that every love story is unique, and your wedding should be a reflection of that one-of-a-kind bond. With this principle at heart, we set out to create a platform that 
                  combines the latest technology with the warmth of human touch.</p>
            </section>
            <br>
            <section>
                <h2>Our Mission</h2>
                <p>Our mission is clear: to make your wedding planning experience joyful,
                   stress-free, and, most importantly, truly personal.
                    We believe that your wedding day should be a celebration of your love, 
                    your style, and your dreams. Our system is designed to empower you with the tools, 
                  resources, and support needed to bring your vision to life.</p>
            </section>
            <br>
            <section>
                <h2>Why Choose Us?</h2>
                <p>What sets us apart is our commitment to innovation and simplicity. 
                  Wedding Whispers & Wonders is not just another wedding planning tool; 
                  it's your trusted companion through every step of the journey. 
                  We offer a user-friendly, comprehensive platform that helps you organize,
                   collaborate, and execute every aspect of your wedding seamlessly. From
                    guest lists and budgets to vendors and timelines,
                   we've got you covered.</p>
                   <br>
                   <p>But beyond the technology, it's our team of passionate and 
                    experienced wedding experts who truly make the difference.
                     We're here to guide you, answer your questions, and provide a helping hand whenever you need it. 
                    Your dream wedding is our dream too.</p>
            </section>
            <br>
            <section>
                <h2>Join Us on Your Wedding Journey</h2>
                <p>We are thrilled to be a part of your wedding adventure.
                   Whether you're just starting or already well into the planning process,
                   Wedding Whispers & Wonders is here to support and inspire you. Join us, and together, we'll create a wedding that is uniquely yours 
                   - a day filled with love, joy, and unforgettable moments.
                  Thank you for considering us as your wedding planning partner.
                   Let's embark on this beautiful journey together!</p>
            </section>
            

        </div>

</main>
            
        <?php
             include_once 'footer.php';

        ?>
</body>
</html>

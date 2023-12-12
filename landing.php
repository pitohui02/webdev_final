<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel = "stylesheet"href="css/global.css">
    <link rel = "stylesheet"href="css/login.css">
    <link rel = "stylesheet"href="css/landing.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

</head>
<body>
    
    <div class = "parent">
        
        <?php include("components/navbar.php"); ?>
            
        <div class="parent">
            <div class="child1">
                <div class="left">
                    <h4>
                    Renton offers a seamless experience, 
                    connecting tenants with quality dorms, secure payments, 
                    and responsive support for hassle-free living.
                    </h4>

                    <div class="button-group">
                        <button type="button" class = "button-landing home-button">Find a Home</button>
                        <button type="button" class = "button-landing partner-button">Be a Partner</button>
                    </div>
                </div>

                <div class="right">
                    <img src="public/logo-landing.png" alt="logo-landing" class = "logo-landing">
                </div>
            </div>

            <div class="child2">
                <div class="card">
                    
                <img src="public/placeholder-card.jpg" alt="placeholder" height = "300" width="300" class = "placeholder-card">
                    
                    <div class="info-card">
                        <p>Green Residences</p>
                        <p>Beside De La Salle University Manila</p>
                        <p>₱15,000 Monthly</p>
                    </div>

                </div>

                <h5>
                    If you need a place to call home, check out our dorm options. 
                    Find comfort, convenience, and a welcoming community. 
                </h5>
            </div>

            <div class="child3">
                <div class="title">
                    <h1>Settle into Your Space</h1>
                    <h3>Discover our Benefits</h3>
                </div>

                <div class="child3-content">
                    <div class="content-1">
                        <div class="content-1-item contents">
                            <h2>Extensive Selection</h2>
                            <p>Select from a diverse range of spaces. Book your new home in a single click.</p>
                        </div>

                        <div class="content-1-item contents">
                            <h2>A Homely Space</h2>
                            <p>More than rooms, it's a welcoming space for study, relaxation, and calling home.</p>
                        </div>

                        <div class="content-1-item contents">
                            <h2>Flexible Rental Options</h2>
                            <p>Customize your stay to suit your lifestyle and study schedule.</p>
                        </div>
                    </div>

                    <div class="content-2">
                        <div class="content-2-item contents">
                            <h2>Comfort Redefinedn</h2>
                            <p>Experience practical living with built-in amenities that enhance comfort.</p>
                        </div>

                        <div class="content-2-item contents">
                            <h2>Responsive Customer Support</h2>
                            <p>Contact Renton for prompt assistance with any queries or concerns.</p>
                        </div>

                        <div class="content-2-item contents">
                            <h2>Exclusive Perks</h2>
                            <p>Unlock exclusive discounts and perks with Renton, your ideal housing solution.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="child4">
                    <div class="about-us">
                        <h1>About Us</h1>
                        <p>Welcome to Renton, your reliable solution for discovering
                            the ideal living space. Tailored to meet diverse needs, we offer a
                            broad array of comfortable and affordable housing options.</p>
                    </div>

                    <div class="our-mission">
                        <h1>Our Mission</h1>
                        <p> Our aim is to simplify the search for quality accommodations. 
                            We present a diverse selection of residences while ensuring a 
                            supportive environment for a successful living experience.</p>
                    </div>

                    <div class="secure-your-space">
                            <h1>How to Secure Your Space?</h1>
                            <p> Here are three easy steps for you to secure your ideal space</p>
                    </div>

                    <div class="space">
                        <div class="explore">
                            <img src="public/logo-explore.png" alt="" height="250" width = "320">
                            <div>
                                <h3>Explore</h3>
                                <p> Discover and select a convenient 
                                    bed space or room that suits your requirements.</p>
                            </div>
                        </div>
                        
                        <div class="secure">
                            <img src="public/logo-secure.png" alt="" height="350" width = "320">
                            <div>
                                <h3>Secure</h3>
                                <p> Sign up, create an account, and 
                                    confidently book the chosen space hassle-free.</p>
                            </div>
                        </div>

                        <div class="settle-in">
                            <img src="public/logo-settle.png" alt="" height="250" width = "350">
                            <div>
                                <h3>Settle In</h3>
                                <p> Your new rental space is prepped and ready for your arrival! </p>
                            </div>
                        </div>
                    </div>

                    <div class="get-in-touch">
                        <div>
                            <h1>Get in touch with our team!</h1>
                            <p> Thank you for considering Renton! Please don't hesitate to get 
                                in touch with our team for inquiries, support, or any questions you might have.</p>
                        </div>
                        <button type="button">Send us an Email</button>
                    </div>
                </div>

        </div>

        <?php include("components/footer.php"); ?>


    </div>



</body>
</html>
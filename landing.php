<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent On</title>
    
    <link rel = "stylesheet"href="css/global.css">
    <link rel = "stylesheet"href="css/landing.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

</head>
<body>
        
            
            
        <div class="parent">
            <?php include("components/navbar.php"); ?>
            
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
                
                <?php include("components/card.php")?>

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

            

            <?php include("components/footer.php"); ?>
        </div>

        

</body>
</html>
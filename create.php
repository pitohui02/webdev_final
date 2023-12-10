<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet"href="css/global.css">
    <link rel = "stylesheet"href="css/create.css">
</head>




<body>
        <div class = "parent">
            <div>
                <nav class = "nav">
                    <img src="public/renton-logo.png" width="150" height="150">
                    <div class = "nav_link">
                        <a href = "home">Home </a>
                        <a href = "explore">Explore </a>
                        <a href = "ownercollab">Owner Collaborations </a>
                        <a href = "contact">Contact Us </a>
                        <a href = "about">About Us </a>
                        <a href = "login">Login / Signup </a>
                    </div>

                </nav>
            </div>

            <div class = "login-box"> 
                    <div class = "logo-content">
                        <img src="public/login-logo.png" width="400" height="400" class = "image-logo">
                        <h4> Unlock Your Home Away from Home with Renton </h4>
                    </div>

                    <form class = "login-form" method="POST">
                        <h1> SIGN UP </h1>
                        
                        <div class = "login-input">
                            <input type = "text" name="FName" placeholder = "First Name" class = "input">
                            <input type = "text" name="MName" placeholder = "Middle Name" class = "input">
                            <input type = "text" name="LName" placeholder = "Last Name" class = "input">
                            <input type = "email" name="Email" placeholder = "Email" class = "input">
                            
                            <div>
                                <input type = "number" name="Age" placeholder = "Age" class = "input age">
                                <input type = "number" name="Contact" placeholder = "Contact" class = "input contact">
                            </div>

                            <input type = "password" name="Password" placeholder = "Password" class = "input">
                        </div>    

                        <button type = submit">SIGN UP</button>

                        <a href = "login.php"> Already have an account? <span class = "sign-up">Login</span> </a>
                        <h4> OR </h4>
                    </form>

            </div>

            <div class = "footer-box"> 
                <footer>

                    <div class = "links">
                        <div class = "footer-links">
                            <a href = "explore">Explore </a>
                            <a href = "ownercollab">Owner Collaborations </a>
                            <a href = "contact">Contact Us </a>
                            <a href = "about">About Us </a>
                            <a href = "login">Login / Signup </a>
                        </div>

                        <div class = "footer-socials">
                        <a href = ""><img src="public/fb-icon.svg" width="30" height="30"></a>
                        <a href = ""><img src="public/x-icon.svg" width="30" height="30"></a>
                        <a href = ""><img src="public/insta-icon.svg" width="30" height="30"></a>
                        </div>
                    </div>

                    <div class = "footer-copyrights">
                        <img src="public/renton-logo.png" width="100" height="100">
                        <h4> Copyright © 2024 Renton. All rights reserved. </h4>
                    </div>
                </footer>
            </div>

        </div>
</body>
</html>
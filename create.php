<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet"href="global.css">
</head>

<style> 
.parent {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .nav {
        max-width: 1839px;
        width: 1839px;

        display: flex;
        flex-wrap: wrap;
        flex-direction: row;

        justify-content: space-between;
        align-items: center;
    }

    .nav_link {
        display: flex;
        flex-wrap: wrap;

        align-items: center;
        gap: 20px;
        
        margin-right: 30px;
    }

    .nav a {
        color: #FFF;
        font-family: Clash Display;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        text-decoration: none;
    }

    /* login-box */

    .login-box {
        
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;

        width: 1101px;
        height: 686px;
        flex-shrink: 0;
        
        border-radius: 10px;
        background: #E7E7E7;
        box-shadow: 0px 4px 50px 10px rgba(0, 0, 0, 0.25);
        padding: 20px;

        margin-top: 20px;

    }

    .login-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .login-form h1 {
        color: #727272;
        font-family: Clash Display;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .login-form h4 {
        color: #727272;
        font-family: Clash Display;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .logo-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .logo-content h4 {
        color: #000;
        font-family: Clash Display;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .login-input {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        gap: 20px;
    }

    .input {
        width: 300px;
        height: 48px;
        flex-shrink: 0;

        border-radius: 4px;
        background: #FFF;
        padding: 5px;

        color: #000;
        font-family: Clash Display;
        font-size: 20px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
    }

    .checkbox {
        margin-top: 15px;
        margin-bottom: 15px;
        align-self: flex-start;
    }

    .login-form label {
        color: #000;
        font-family: Clash Display;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .login-form button {
        width: 300px;
        padding: 14px 45px;

        border-radius: 8px;
        background: #1E1E1E;

        color: #FFF;
        font-family: Clash Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .login-form button:hover {
        transition: 1s;

        background: #403e3e;
        cursor: pointer;
    }
    
    .login-form a {
        color: #000;
        font-family: Clash Display;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-decoration: none;

        margin-top: 15px;
    }
    
    .alternate-login {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;

        gap: 20px;
        
    }

    .sign-up {
        color: #292696;
    }

    /* footer */

    .footer-box {
        width: 1440px;
        height: auto;
    }

    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        margin-top: 30px;
    }


    .footer-links {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        gap: 20px;
    }

    .footer-socials {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-top: 30px;
    }

    .footer-copyrights {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    footer a {
        color: #FFF;
        font-family: Clash Display;
        font-size: 15px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        text-decoration: none;
    }

    .footer-box h4 {
        color: #FFF;
        font-family: Clash Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

</style>


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
                            <input type = "number" name="Contact" placeholder = "Contact" class = "input">
                            <input type = "number" name="Age" placeholder = "Age" class = "input">
                            <input type = "password" name="Password" placeholder = "Password" class = "input">
                        </div>    

                        <div class = "checkbox"> 
                            <input type="checkbox" name = "remember-me" id = "remember-me"> 
                            <label for = "remember-me"> Remember Me </label>
                        </div>

                        <button type = submit">Login</button>

                        <a href = "login.php"> Already have an account? <span class = "sign-up">Login</span> </a>
                        <h4> OR </h4>

                        <div class = "alternate-login">
                            <a href = ""><img src="public/google-logo.png" width="40" height="40"></a>
                            <a href = ""><img src="public/fb-logo.png" width="40" height="40"></a>
                        </div>
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
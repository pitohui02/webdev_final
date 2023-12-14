<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create An Account</title>
    <link rel = "stylesheet"href="css/global.css">
    <link rel = "stylesheet"href="css/create.css">
</head>

<body>
        <div class = "parent">

            <?php include("components/navbar.php"); ?>

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
                            <input type = "password" name="confirm_password" placeholder = "Confirm Password" class = "input">
                        </div>    

                        <button type = submit">SIGN UP</button>

                        <a href = "login.php"> Already have an account? <span class = "sign-up">Login</span> </a>
                    </form>

            </div>

            <?php include("components/footer.php"); ?>

        </div>
</body>
</html>
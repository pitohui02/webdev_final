<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet"href="global.css">
    <link rel = "stylesheet"href="css/login.css">
</head>

<?php
include('config.php');

if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
    $u = trim($_POST['user_email']);
    $sql = "SELECT id, user_email, user_password FROM tbl_users WHERE user_email = ?";
    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $u);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['user_password'];

            // Verify the entered password against the retrieved hash
            if (password_verify($_POST['user_password'], $hashed_password)) {
               echo "Success!"; // Password is correct
            } else {
                echo "Invalid credentials!"; // Password is incorrect
            }
        } else {
            echo "User does not exist!"; // No user found with the provided email
        }
    } else {
        echo $conn->error; 
    }
} else {
    echo "Invalid request";
}
?>

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
                    <h1> LOGIN </h1>
                    
                    <div class = "login-input">
                        <input type = "text" name="user_email" placeholder = "Username" label = "username" class = "input">
                        <input type = "password" name="user_password" placeholder = "Password" label = "user_password" class = "input">
                    </div>    

                    <div class = "checkbox"> 
                        <input type="checkbox" name = "remember-me" id = "remember-me"> 
                        <label for = "remember-me"> Remember Me </label>
                    </div>

                    <button type = submit">Login</button>

                    <a href = "create.php"> Don’t have an account yet? <span class = "sign-up">Sign up</span> </a>
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
<?php
include_once 'includes/config.php';
include_once 'includes/register-include.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at most 6 characters long</li>
            <li>Passwords should be of lower case</li>

            <li>Your password and confirmation must match exactly</li>
        </ul>
        <h1>The registration is currently closed.</h1>
        
        
        <p>Return to the <a href="index.php">login page</a>.</p>
    </body>
</html>


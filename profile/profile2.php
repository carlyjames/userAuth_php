<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>Document</title>
</head>
<body>                                                                              
    <div class="container">
        <div class="holder">
            <div class="profile_image">
                <img src="../img6.jpg" height="200px" width="200px" alt="">
            </div>
            <div class="profile_details">
                <h3>Email : __<?php if(isset($_SESSION['user_email'])) { echo $_SESSION['user_email']; } ?></h3>
                <h3>Password : __<?php if(isset($_SESSION['user_password'])) { echo $_SESSION['user_password']; } ?></h3>
            </div>
        </div>
    </div>
</body>
</html>
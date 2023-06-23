<?php
session_start();
include('public/db_conf.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $checkLogin = "SELECT * FROM `auth_table` WHERE `email` = '$email' AND `pass` = '$pass'";
    $query = mysqli_query($db_con, $checkLogin);
    if (mysqli_num_rows($query)) {
        while ($info = mysqli_fetch_assoc($query)) {
            if ($email == $info['email'] && $pass == $info['pass']) {
                header('refresh: 2; profile/profile2.php');
                $_SESSION['user_email'] = $info['email'];
                $_SESSION['user_password'] = $info['pass'];
            } 
        }
    } else {
        echo "<script>alert('YOUR MATCHING FAILED PLEASE TRY AGAIN...!!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HTML FORMS</title>
</head>

<body>
    <section class="container">
        <div class="form-holder">
            <div class="form-header">
                <h6>Hey..!! Log In</h6>
            </div>
            <form class="main-form" method="POST">
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>
                <div class="password">
                    <label for="pass">Password:</label>
                    <input type="text" id="pass" name="pass">
                </div>
                <div class="btn-holder">
                    <button type="submit" name="login">Log In</button>
                    <a href="index.php">Sign Up</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
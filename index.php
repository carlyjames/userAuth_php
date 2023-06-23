<?php
 include('public/db_conf.php');

 if (isset($_POST['btn'])) {
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     $name = $_POST['name'];
     $country = $_POST['country'];
     $number = $_POST['number'];

    if (empty($email)  && empty($pass)  && empty($name)   ) {
        echo '<script> alert("PLEASE FILL ALL SPACES") </script>';
    }else{
        $sql = "INSERT INTO `auth_table`(`id`,`email`,`pass`,`name`, `country`, `number`) VALUES('','$email','$pass','$name', '$country', '$number')";
        $sql_query =  mysqli_query($db_con, $sql);
        if($sql_query) {
            echo '<script>alert( "DONE BRO")</script>';
            header('refresh: 3; login.php');

        }else{
            echo '<script>alert("NOT UPLOADED")</script>';

        }

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
                <h6>SIGN UP FORM</h6>
            </div>
            <form class="main-form" action="" method="POST" enctype="multipart/form-data">
                <div class="name">
                    <label for="">Name:</label>
                    <input type="text" name="name" >
                </div>
                <div class="name">
                    <label for="">Email:</label>
                    <input type="email" name="email" >
                </div>
                <div class="email">
                    <label for="">Password:</label>
                    <input type="password" name="pass" >
                </div>
                <div class="name">
                    <label for="">Country:</label>
                    <input type="text" name="country" >
                </div>
                <div class="name">
                    <label for="">Number:</label>
                    <input type="number" name="number" >
                </div>
                <div class="btn-holder">
                    <button type="submit" name="btn">Get In Touch</button>
                    <a href="login.php">Log in</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
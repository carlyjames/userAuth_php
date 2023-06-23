<?php

define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("NAME", "php_james");
$db_con = mysqli_connect(HOST, USER, PASS, NAME) or die('DB NOT CONNECTED');


?>
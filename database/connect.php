<?php
define("DBSERVER", "localhost");
define("DBUSERNAME", "root");
define("DBPASSWORD", "");
define("DBNAME", "babybear");

$conn = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
            $conn->set_charset("utf8");
?>

<?php


define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'WEB_Project');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, PASSWORD);
if (!$conn) {
    die("Connection Failed! " . mysqli_connect_error());
}
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

<?php
// @var
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'sagarmatha';
// connect to database
$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (!$con)
    die('Something Went Wrong');
 ?>

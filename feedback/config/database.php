<?php

define('DB_HOST', 'localhost:8181');
define('DB_USER', 'jea');
define('DB_PASS', '123456');
define('DB_NAME', 'php_crash_dev');


// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if($conn->connect_error) {
    die('Connection failed ' . $conn->connect_error);

}

// echo 'CONNECTED!';
<?php

// cookies - not sensitive data 
// session - sensitive data


// set cookies
setcookie('name', 'Brad', time() + 86400); // 1 day * 30 for 30 days

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

// delete
setcookie('name', '', time() - 86400);
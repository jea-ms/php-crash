<?php

session_start();


// destroy
session_destroy();
header('Location: /php-crash/13_sessions.php');
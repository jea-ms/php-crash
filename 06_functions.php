<?php
    $y = 12; 
    function sampleCode() {
        global $y;
        $x = 10;
        echo 'User registered';
        echo $y;
    }

    function registerUser($email) {
       echo $email . ' registered';
    }

    
    registerUser('brad@gmail.com');

    function sum($n1 = 4, $n2 = 6) {
        return $n1 + $n2;
    }

    $total =  sum();
    echo $total;

    // anonymous function
    $subtract = function ($n1, $n2) {
        return $n1 - $n2;
    };
    echo $subtract(10,5);

    $multiply = fn ($n1, $n2) => $n1 * $n2;
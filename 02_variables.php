<!-- php data types

String 
Integer
Float
Boolean
Array
Object 
NULL
Resource

naming
- prefixed with $ 
- start letter or underscore
- variables with alpha-numeric characters
- variables are case sensitive
- class names as StudlyCaps
- class constants upper cae with underscore
- methods as camelcase -->

<?php
$name = 'Brad';
$age = 40;
$has_kids = false;
$cash_on_hand = 20.75;

echo $name . ' is ' . $age . ' years old';
echo "${name} is ${age} years old";

$x = '5' + '5';

// constants 
define('HOST', 'localhost');

echo HOST;
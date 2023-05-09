<?php

// strlen()
// strpos() - first occurence
// strrpos() - last occurence
// strrev() - reverse 
// strtolower
// strtoupper
// ucwords
// str_replace
// substr
// str_starts_with
// str_ends_with


// html entities

$string2 = '<h1> Hello </h1>';
echo $string2;

$string1 = '<script>alert(1)</script>'; // prone to attacks, can be tested with forms
echo htmlspecialchars($string1);

// formatted string
printf('%s likes to %s', 'Brad', 'quote');
printf('1+1=%f', 1+1);

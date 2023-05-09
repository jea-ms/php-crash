<?php

$fruits = ['apple', 'orange', 'pear'];

// get length
echo count($fruits);

// search array
var_dump(in_array('apple', $fruits));

// add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'banana');

print_r($fruits);

// remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);

print_r($fruits);

//split into 2 chunks
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);

// merge

$arr1 = [1,2,3];
$arr2 = [4,5,6];

// merge
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1,...$arr2];

print_r($arr3);
print_r($arr4);

// combine
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a,$b);
print_r($c);

// get keys
$keys = array_keys($c);
print_r($keys);

// flip array
$flipped = array_flip($c);
print_r($flipped);

// range
$numbers = range(1,20);
print_r($numbers);

// array map
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);

print_r($newNumbers);

// condition
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

// reduce - get sum of array
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);


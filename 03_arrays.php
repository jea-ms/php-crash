<?php

//simple array
$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear');

var_dump($numbers);
echo $fruits[1];

// associative array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

echo $colors[4];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'tevers',
    'email' => 'brad@gmail.com'
];

echo $person['first_name'];

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'tevers',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'Brad2',
        'last_name' => 'tevers2',
        'email' => 'brad2@gmail.com'
    ],
    [
        'first_name' => 'Brad3',
        'last_name' => 'tevers3',
        'email' => 'brad3@gmail.com'
    ]
];

var_dump(json_encode($people));
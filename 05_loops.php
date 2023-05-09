<?php

// for loop 
for($x = 0; $x <= 10; $x++) {
    echo $x;
}

// while loop
$x = 1;

while($x <= 15) {
    echo 'Number ' . $x . '<br>';
    $x++;
}

// do while loop
$x = 1;
do {
    echo 'Number ' . $x . '<br>';
    $x++;
} while($x <= 5);

// foreach loop for arrays

$posts = ['First Post', 'Second Post', 'Third Post'];

for($x = 0; $x < count($posts); $x++) {
    echo $posts[$x] . '<br>';
}

foreach($posts as $index => $post) {
    echo $index . " - " . $post . '<br>';
}

$person = [
    'first_name' => 'Brad',
    'last_name' => 'tevers',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value) {
    echo $key . " - " . $value . '<br>';
}

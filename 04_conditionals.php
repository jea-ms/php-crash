<?php

// operators
// <
// >
// <=
// >=
// == equal to
// === identical to
// != not equal to
// !== not identical to

$age = 20;

if($age >=18) {
    echo 'You are old enough to vote.';
} else {
    echo 'Sorry, you are not old enough to vote';
}

$today = date("H");
echo $today;

if($today < 12) {
    echo 'Good morning';
} else if ($today < 17 || $today < 20) {
    echo 'Good afternoon';
} else {
    echo 'Good evening';
}

$posts = [];

if(!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

echo !empty($posts) ? $posts[0] : "No posts";

$firstPost =  !empty($posts) ? $posts[0] : "No posts";

$firstPost = $posts[0] ?? null;
echo $firstPost;

//switches
$favcolor = 'red';

switch($favcolor) {
    case 'red';
        echo 'Your fave color is red'; break;
    case 'blue';
        echo 'Your fave color is blue'; break;
    case 'green';
        echo 'Your fave color is green'; break;
    default:
        echo 'You do not have a fave color.';
}
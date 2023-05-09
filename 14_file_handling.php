<?php
// reading and writing files 


$file = 'extras/users_2.txt';

if(file_exists($file)) {
    // echo readfile($file); // not flexible 

    // pointer to file 
    $handle = fopen($file, 'r'); // mode for reading
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    echo 'No file found. Writing...';
    $handle = fopen($file, 'w'); // writing
    $contents = 'Neil' . PHP_EOL . 'Steve' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}
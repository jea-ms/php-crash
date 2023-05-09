<?php

// - pass data through urls
// echo $_GET['name'];
// echo $_GET['age'];

if(isset($_POST['submit'])) { // check for submit btn with name
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    // or (PREFERRED)
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ; //or INPUT_GET
    // OR
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name . " " . $age;
}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=John&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
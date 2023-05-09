<?php 
// sessions are stored in server 
// cookies are stored in client (browser)

session_start(); // added to every page; create header file

if(isset($_POST['submit'])) { // check for submit btn with name

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS) ;
    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect login';
    }
}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=John&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
session_start();
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'latihan5e');

// if the login button is clicked
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // if there are no errors, check if username and password are correct
    if (count($errors) == 0) {
        $password = md5($password); // encrypt password before comparing with that from database
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            // log user in
            $_SESSION['username'] = $username;
            header('location: admin.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Selamat Datang</h2>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div>
            <label>Username:    </label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
<?php
// logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>
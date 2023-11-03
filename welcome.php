<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html"); // Redirect to the login page if the user is not logged in
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <p>This is the welcome page. You are logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>

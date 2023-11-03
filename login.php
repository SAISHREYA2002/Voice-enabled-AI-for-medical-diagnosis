<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username and password are valid (you should replace this with your own authentication logic)
    if ($username === "your_username" && $password === "your_password") {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page upon successful login
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
>
<?php
session_start();

// Database connection (modify as needed)
$db = mysqli_connect('mysql', 'root', 'password', 'registration');

// Register user
if (isset($_POST['reg_user'])) {
    // Retrieve form data
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    // Hash password before storing
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into 'users' table
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    // Redirect to login page or home page
}

// Login user
if (isset($_POST['login_user'])) {
    // Retrieve form data
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Verify user credentials (compare hashed passwords)
    // Redirect to dashboard or show error message
}
?>

<?php
include('server.php'); // Include server-side logic

// HTML form for user login
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login System - PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <!-- Other input fields: password -->
        <!-- ... -->
        <button type="submit" class="btn" name="login_user">Login</button>
    </form>
</body>
</html>

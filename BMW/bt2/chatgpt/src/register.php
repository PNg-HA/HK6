<?php
include('server.php'); // Include server-side logic

// HTML form for user registration
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration System - PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <!-- Other input fields: email, password, confirm password -->
        <!-- ... -->
        <button type="submit" class="btn" name="reg_user">Register</button>
    </form>
</body>
</html>

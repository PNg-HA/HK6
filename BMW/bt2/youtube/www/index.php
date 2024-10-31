<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quan-HA Website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>A website from HA&Quan.</h1>

	<br>
	Hello, <?php echo $user_data['username']; ?>. We are HA and Quan.
</body>
</html>
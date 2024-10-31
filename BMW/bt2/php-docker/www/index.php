<?php
$host = 'mysql-db';
$user = 'db_user';
$pass = 'password';
$db = 'test_database';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Insert data into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<br>Data inserted successfully";
        } else {
            echo "<br>Error inserting data: " . $conn->error;
        }
    }
}

// Handle GET request
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['action']) && $_GET['action'] == 'fetch') {
        // Retrieve data from the database
        $result = $conn->query("SELECT * FROM users");
        if ($result->num_rows > 0) {
            echo "<br><br>Users:<br>";
            while ($row = $result->fetch_assoc()) {
                echo "username: " . $row["username"] . " - password: " . $row["password"] . "<br>";
            }
        } else {
            echo "<br>No users in the database";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
    <h2>Submit Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Retrieve Data</h2>
    <a href="?action=fetch">Fetch Data</a>
</body>
</html>
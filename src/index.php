<!DOCTYPE html>
<html>
<head>
    <title>PHP Docker App</title>
</head>
<body>

<?php
$servername = "mysql";
$username = $_ENV["MYSQL_USER"];
$password = $_ENV["MYSQL_PASSWORD"];
$database = $_ENV["MYSQL_DATABASE"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully";
?>

</body>
</html>
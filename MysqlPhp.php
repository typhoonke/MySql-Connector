<?php
$servername = "localhost"; // Replace with your database server name
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$dbname = "your_database"; // Replace with your database name

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

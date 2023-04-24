<?php
$servername = 'localhost';
$username = 'root';
$password = '12345';
$dbname = 'miranda';
$port = '3001';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
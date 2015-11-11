<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];

echo $servername;
echo $username;
echo $password;

// Create connection
//$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

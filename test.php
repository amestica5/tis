<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];
$basedatos = $_SERVER["base"];

// Create connection
$conn = new mysqli($servername, $username, $password,$basedatos);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
} else if ($result = $conn->query("SELECT COUNT(*) FROM  `test` WHERE id < 1500050")) {
    while($obj = $result->fetch_object()){
        echo $result;   
    }
}
echo "Connected successfully";





?>

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
} elseif ($result = $conn->query("SELECT * FROM  `test` WHERE id < 1500050")) {
    $obj = $result->fetch_object()
    for($i=0; $i<50;$i++){
        echo $obj[$i];
    }
}
echo "Connected successfully";





?>

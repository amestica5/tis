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
} 
echo "Connected successfully";

$resultado= mysql_query("SELECT COUNT(*) FROM  `test` WHERE id <1500050");
var_dump($resultado);



?>

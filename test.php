<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];

// Create connection
$conn = new mysqli("localhost", $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$consulta = mysql_query("SELECT * 
FROM  `test` 
WHERE id <1500050");
var_dump($consulta);
for($i=0;$i<50;$i++){
echo $consulta[$i];
}

?>

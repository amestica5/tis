<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$consulta = "SELECT * FROM  `test` WHERE id <1500050";
$resultado= mysql_query($consulta);
$row=mysql_fetch_array($resultado);
var_dump($row);
for($i=0;$i<50;$i++){
echo $row[$i];
}

?>

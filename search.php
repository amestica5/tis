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
    
} elseif($result = $conn->query("SELECT * FROM  `usuarios` WHERE id < 50")){
    while($obj = $result->fetch_object())
    echo $obj->nombre_usuario ."<br/>";
    
}
?>

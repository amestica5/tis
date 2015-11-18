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
    
} else{
    for($i=0; $i<50;$i++){
    $result = $conn->query("SELECT * FROM  `usuarios` WHERE id < $i"); 
    while($obj = $result->fetch_object())
    echo $obj->nombre_usuario ."<br/>";
    }
}
?>

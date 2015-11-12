<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];
$basedatos = $_SERVER["base"];
// Create connection
$conn = new mysqli($servername, $username, $password,$basedatos);
$sql = "UPDATE usuarios SET nombre_usuario='usuario1' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];
$basedatos = $_SERVER["base"];
// Create connection
$conn = new mysqli($servername, $username, $password,$basedatos);
for ($i=1; $i<1500000;$i++){
    echo "usuario".$i;
$sql = "UPDATE usuarios SET nombre_usuario='usuario.$i' WHERE id=$i";
}
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>

<?php
$servername = $_SERVER["host"];
$username = $_SERVER["user"];
$password = $_SERVER["pass"];
$basedatos = $_SERVER["base"];

$enlace =  mysql_connect($servername, $username, $password);
resultado = mysql_query('INSERT INTO usuarios(nombre_usuario) VALUES("usuario1")');
?>

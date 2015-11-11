<?php
$enlace =  mysql_connect($_SERVER["host"], $_SERVER["user"], $_SERVER["pass"]);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>

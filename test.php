<?php
$link = mysql_connect($_SERVER["host"], $_SERVER["user"], $_SERVER["pass"])
    or die('No se pudo conectar');
echo 'Connected successfully';
mysql_select_db('my_database') or die('No se pudo seleccionar la base de datos');
?>

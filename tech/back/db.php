<?php
$db_host="localhost:8889";
$db_usuario="root";
$db_password="root";
$db_nombre="valkiria";
$conexion = @mysql_connect($db_host, $db_usuario, $db_password) or die(mysql_error());
$db = @mysql_select_db($db_nombre, $conexion) or die(mysql_error());
 ?>

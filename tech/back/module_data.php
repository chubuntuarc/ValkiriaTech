<?php
include_once("back/db.php");
$sql="select * from module where id_module = ".$_SESSION["module_id"]."";
$result=mysql_query($sql, $conexion);
while ($row=@mysql_fetch_array($result))
{
    $_SESSION["module"]= $row[name];
    $_SESSION["module_description"]= $row[description];
    $_SESSION["new_element"]= $row[new_element];
}
@mysql_close($conexion);
?>

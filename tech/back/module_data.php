<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once("back/db.php");
$sql="select * from module where id_module = " . mysql_real_escape_string($_SESSION["module_id"]);
$result=mysql_query($sql);
while ($row=@mysql_fetch_array($result))
{
    $_SESSION["module"]= $row[1];
    $_SESSION["module_description"]= $row[2];
    $_SESSION["new_element"]= $row[3];
    $_SESSION["list"] = $row[4];
    $_SESSION["data"] = $row[5];
}
?>

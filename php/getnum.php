<?php
require_once("config.php");
$userid = $_GET["userid"];
$sql="select count(*) from myshopping where `status` = 1 and userid = $userid";
$result = mysql_query($sql);
$item = mysql_fetch_array($result);
$obj= array();
$obj["count"]= $item[0];
echo  json_encode($obj);
?>
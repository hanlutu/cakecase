<?php
require_once("config.php");
$userid = $_GET["userid"];
$sql = "select  * from  myshopping where `status` = 1 and  userid =$userid";

$result = mysql_query($sql);

$list = array();

while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsprice"] = $item["goodsprice"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsname"]= $item["goodsname"];
    $temp["goodsimg"]= $item["goodsimg"];
    $list[] = $temp;
}
echo json_encode($list);


?>
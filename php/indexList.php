<?php
require_once("config.php");
$sql="select * from goodsinfo where status = 1";
$result = mysql_query($sql);
$list = array();
while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["goodsid"]=$item["goodsid"];
    $temp["goodsname"]=$item["goodsname"];
    $temp["goodsdetails"]=$item["goodsdetails"];
    $temp["goodsprice"]=$item["goodsprice"];
    $temp["goodsimg"]=$item["goodsimg"];
    $list[] = $temp;
}

echo json_encode($list);
?>
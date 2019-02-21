<?php
require_once("config.php");
$sql="select * from goodsinfo";
$result = mysql_query($sql);
$list = array();
while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["goodsid"]=$item["goodsid"];
    $temp["goodsname"]=$item["goodsname"];
    $temp["goodsdetails"]=$item["goodsdetails"];
    $temp["goodsnum"]=$item["goodsnum"];
    $temp["goodsprice"]=$item["goodsprice"];
    $temp["goodsimg"]=$item["goodsimg"];
    $temp["bigimg"] = $item["bigimg"];
    $list[] = $temp;
};
echo json_encode($list);
?>
<?php
require_once("config.php");
$key = $_GET["key"];
$orderkey = $_GET["orderkey"];
$paixukey = $_GET["paixu"];
$skipnum = $_GET["skipnum"];
$shownum = $_GET["shownum"];
$sql="select * from goodsinfo where `status` = 1 and (goodsname like '%$key%') order by $orderkey $paixukey LIMIT $skipnum,$shownum ";
$result = mysql_query($sql);
// if(!$result)exit("执行SQL:$sql<br>出错:".mysql_error());
$list = array();
while($item = mysql_fetch_array($result)){
        $temp = array();
        $temp["goodsid"]=$item["goodsid"];
        $temp["goodsname"]=$item["goodsname"];
        $temp["goodsdetails"]=$item["goodsdetails"];
        $temp["goodsnum"]=$item["goodsnum"];
        $temp["goodsprice"]=$item["goodsprice"];
        $temp["goodsimg"]=$item["goodsimg"];
        $list[] = $temp;
    }

echo json_encode($list);
?>
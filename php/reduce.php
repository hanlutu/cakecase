<?php
require_once("config.php");
$id = $_GET["id"];
$sql="update myshopping set goodsnum = goodsnum - 1 where id = $id";
mysql_query($sql);
$count = mysql_affected_rows();
$obj=array();

if($count > 0){
    $obj["code"]=1;
    $obj["msg"]="数量更新成功";
}else{
    $obj["code"]=0;
    $obj["msg"]="数量更新失败";
}
echo json_encode($obj);
?>
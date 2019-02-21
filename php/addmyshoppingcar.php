<?php
require_once("config.php");

$userid= $_GET["userid"];
$goodsid = $_GET["goodsid"];
$goodsname = $_GET["goodsname"];
$goodsimg = $_GET["goodsimg"];
$goodsprice = $_GET["goodsprice"];
$goodsnum = $_GET["goodsnum"];


$sql1 = "SELECT count(*) from myshopping where userid= $userid and goodsid=$goodsid";
$result = mysql_query($sql1);
$item = mysql_fetch_array($result);
if($item[0]>0){
    $sql = "update  myshopping set goodsnum = goodsnum+$goodsnum where  userid= $userid and goodsid=$goodsid";
}else{
    $sql = "insert into  myshopping(userid,goodsid,goodsname,goodsprice,goodsnum,goodsimg,status) VALUES($userid,$goodsid,'$goodsname',$goodsprice,$goodsnum,'$goodsimg',1)";
};


$result = mysql_query($sql);

$count = mysql_affected_rows();

$obj= array();

if($count>0){
    $obj["code"]= 1;
    $obj["msg"]= "加入成功";
}else{
    $obj["code"]= 0;
    $obj["msg"]= "加入失败";
}
echo  json_encode($obj);

?>
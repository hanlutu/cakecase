<?php
require_once("config.php");
$username = $_GET["username"];
$userpwd = $_GET["userpwd"];
$sql = "select * from userinfo where username = '$username'";
$result = mysql_query($sql);
$item = mysql_fetch_array($result);
// echo $item;
$obj = array();
if($item){
    $exsisPwd = $item["userpwd"];
    if($exsisPwd == $userpwd){
        $obj["code"] = 1;
        $obj["msg"] = "登陆成功";
        $obj["userid"]=$item["id"];
    }else{
        $obj["code"] = 0;
        $obj["msg"] = "输入密码不匹配";
    }
}else{
    $obj["code"] = 0;
    $obj["msg"] = "用户名不存在";
}
echo json_encode($obj);
?>
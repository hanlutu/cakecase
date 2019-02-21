<?php
require_once("config.php");
$username =$_GET["username"];
$userpwd = $_GET["userpwd"];
$sql="select * from userinfo where username = '$username'";
$result = mysql_query($sql);
$item = mysql_fetch_array($result);
$obj = array();
if($item){
    $obj["code"] =0;
    $obj["msq"] = "用户名已存在";
}else{
    $sql = "INSERT INTO userinfo (username,userpwd,`status`)values('$username','$userpwd',1)";
    mysql_query($sql);
    $count = mysql_affected_rows();
    if($count >0){
        $obj["code"] = 1;
        $obj["msq"] = "注册成功";
    }else{
        $obj["code"] = 0;
        $obj["msq"] = "注册失败";
    }
}
echo json_encode($obj);
?>
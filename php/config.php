<?php
@header("content-type:text/html;charset=utf8");
@header("Access-Control-Allow-Origin:*");
$connect = mysql_connect("sqld-gz.bcehost.com:3306","61e0e916554e49ab9bd415c5ed4a2057","50e0379d490445e0b33ea530bc245bc3");
$a = mysql_select_db("PeaVOPUImHxgDXFmlnPG");
mysql_query("set character set utf8");
mysql_query("set names set utf8");
// if($a){
//     echo "成功";
// }else{
//     echo "fail";
// }

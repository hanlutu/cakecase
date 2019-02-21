<?php
        @header("content-type:text/html;charset=utf8");
        @header("Access-Control-Allow-Origin:*");
        // $connect = mysql_connect("sqld-gz.bcehost.com:3306","4dae18ced9344ae09c96151cc0030490","17783aa1b3d94990b1ce56e16fc7a2fb");
        // $a = mysql_select_db("pEoWmzMTreZYyHRKpzfa");
        // $connect = mysql_connect("localhost","root","root");
        // $a = mysql_select_db("1808");
        $connect = mysql_connect("sqld-gz.bcehost.com:3306","61e0e916554e49ab9bd415c5ed4a2057","50e0379d490445e0b33ea530bc245bc3");
$a = mysql_select_db("PeaVOPUImHxgDXFmlnPG");
        mysql_query("set character set utf8");
        mysql_query("set names set utf8");
        // if($a){
        //     echo "成功";
        // }else{
        //     echo "fail";
        // }
        $sql = "select * from goodsinfo";
        // echo $sql;
        $result = mysql_query($sql);
        $item = mysql_fetch_array($result);
        // print_r($item);
        echo json_encode($item);

?>
<?php 
//添加考勤记录
//连接数据库
require_once("connect.php");
//获取提交的名字
$name=$_REQUEST["name"];
//获取当前日期
$date=time();
$sql="insert into worklist(name,date) values('$name','$date')";
echo $sql;
$pdo->exec($sql);
echo "<script>window.location='../html/add_works_list.php';</script>"
 ?>
<?php
require_once('connect.php');
$username=$_GET["username"];
if(!$username==null){
$namesql="select * from name where name='{$username}'";
//echo $namesql;
//执行sql语句
$flags=$pdo->query($namesql);
//获取受影响条目
$flag = $flags->rowCount();
if($flag){
	echo "<script>alert('改名字已添加')</script>";	
}else{
$sql="insert into name(name) values('$username')";
echo $sql;
$res=$pdo->exec($sql);	
}
}else{
	echo "<script>alert('姓名不能为空')</script>";
}
echo "<script>window.location='../view_use_list.php';</script>"
?>
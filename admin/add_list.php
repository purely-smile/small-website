<?php 
//添加考勤记录
//连接数据库
require_once("connect.php");
//获取当前日期
$date=time();
//获取提交的名字
$name=$_REQUEST["name"];
//查询是否有数据
$findsql="select * from worklist where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
$flags=$pdo->query($findsql);
$flag = $flags->rowCount();
if($flag){
	$sql="update worklist set time=8 where name='$name'";
	$pdo->query($sql);
	echo $sql;
}else{
$addsql="insert into worklist(name,date) values('$name','$date')";
echo $addsql;
$pdo->exec($addsql);
}
echo "<script>window.location='../html/add_works_list.php';</script>"
 ?>
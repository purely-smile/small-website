<?php 
//添加考勤记录
//连接数据库
require_once("connect.php");
//获取当前日期
$date=time();
//获取提交的名字
$name=$_REQUEST["name"];
$time=$_REQUEST["time"];
// echo $name;
// echo $time;
//排除空值的可能
// 查询提交的名字是否有数据
$findname="select * from name where name='{$name}'";
$names=$pdo->query($findname);
$flag_name =$names->rowCount();
if(!$flag_name){
	
}else{
	if($time=='am'){
	$sql="insert into worklist(name,date,am) values('$name','$date',4.0)";
	}elseif($time=='pm'){
	$sql="insert into worklist(name,date,pm) values('$name','$date',4.0)";
	}elseif($time='ap'){
	$sql="update worklist set pm=4.0 where name='$name' and date between '{$timestart}' and '{$timeend}'";	
	}
}
	echo $sql;
	$pdo->query($sql);

echo "<script>window.location='../add_works_list.php';</script>"
 ?>
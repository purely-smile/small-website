<?php
require_once('../admin/connect.php');
//判断url传递的date值
$date=$_REQUEST["date"];
//var_dump($names);
//定义个工时变量,初始化为0
$total_time=number_format(0, 1);
//定义个存放名字的空数组
$name_list=array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>工资结算</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/btn.css">
</head>
<body>
	<?php include'../segment/menu.php' ?>
        <div class="col-md-10 main">
<div class="pull-right">
<ul >
<a target="mainFrame" href="view_salary_list.php?date=today" class="btn btn-default">今天</a>
<a target="mainFrame" href="view_salary_list.php?date=yesterday" class="btn btn-default">昨天</a>
<a target="mainFrame" href="view_salary_list.php?date=month" class="btn btn-default">本月</a>
</ul>
</div>
<h3><?php 
if($date=='today'){
echo "今天工资列表";
}elseif ($date=='yesterday') {
echo "昨天工资列表";
$timestart=$timeyesstart;
$timeend=$timeyesend;
}elseif($date=='month'){
echo "本月工资列表";
$timestart=$monthstart;
$timeend=$monthend;
}else{
}
//默认获取当天的考勤记录
$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
$names=$pdo->query($sql);
//遍历获取到的数组，然后获取到的名字
foreach ($names as $key){	
$name_list[]=$key['name'];}
//名字去重复
$name_list=array_unique($name_list);
//print_r($name_list);

 ?></h3>
 <div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>姓名</th>
			<th>工时</th>
			<th>工资</th>
		</tr>
	</thead>
	<tbody>
		<!-- 遍历数组内的名字,分别获取对应的工时 -->
		<?php foreach ($name_list as $list):?>
		<!-- 获取指定名字的工单 -->
		<?php $list="select name,time from worklist where name='{$list}'";
		//echo $list;
		$time_list=$pdo->query($list);
		foreach($time_list as $list){
		$total_time=bcadd($total_time, $list['time'],1);
		$total_salary=$total_time*50/8;
		//echo $total_time;
		}
 ?>		
		<tr>
			<td><a class="btn btn-success" href="view_detail_salary.php?name=<?php echo $list['name']."&date=".$date; ?>" title=""><?php echo $list['name']; ?></a></td>
			<td><?php echo $total_time; ?></td>
			<td><?php echo $total_salary."元"; ?></td>
			<!-- 重新初始化工资,进入下个循环 -->
			<?php $total_time=number_format(0, 1); ?>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
	</div>
	</div>
</body>
</html>
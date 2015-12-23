<?php
//获取考勤表 
require_once('../admin/connect.php');
//设置sql语句在指定的时间戳范围
$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
//echo $sql;
$names=$pdo->query($sql);
//var_dump($names);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>考勤列表</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
 <h3>考勤表</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>编&nbsp;&nbsp;号</th>
			<th>姓&nbsp;&nbsp;名</th>
			<th>工作时间</th>
			<th>添加日期</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($names as $key):?>
		<tr>
			<td><?php echo $key['id'];?></td>
			<td><?php echo $key['name'];?></td>
			<td><?php echo $key['time'];?></td>
			<td><?php 
			$time=$key['date'];
			echo date('Y-m-d H:i:s',$time);
			?></td>
			<td align="center"><input class="btn btn-info" type="button" value="修改" onclick="editWorks(<?php echo $key['id'];?>)"></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>	
</body>
</html>
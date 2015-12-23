<?php 
require_once('../admin/connect.php');

//排除重复添加的可能
$sqlname='select * from name';
//读取员工表
$names=$pdo->query($sqlname);
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加考勤</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div>
<h3>默认点击一下添加4小时</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>工时</th>
				<th>状态</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($names as $key):?>

			<?php
			//获取当前遍历到的name 
			$name=$key['name'];
			//设置遍历worklist的语句
			$namesql="select * from worklist where name='{$name}'";
			//执行sql语句
			$flags=$pdo->query($namesql);
			//遍历当前的考勤表
			foreach ($flags as $time){
			}
			//获取受影响条目
			$flag = $flags->rowCount();
			 ?>
			 <!-- 开始循环填充数据 -->
			<tr>
			<!-- 填充id -->
				<td><?php echo $key['id'];?></td>
			<!-- 填充name，同时给予a链接，便于添加 -->
				<td><a class="btn btn-success" href="../admin/add_list.php?name=<?php echo $key['name'];?>" title="姓名">
				<?php echo $name;?></a></td>
			<!-- 判断是否工作，如果有返回工时 -->
				<td><?php
				if($flag){
					echo $time['time'];
				}else{
					echo "无";
				}
				 ?></td>
			<!-- 显示状态信息，如果有蓝色，没有红色。同时给予对应的状态 -->
				<td class="btn 
					<?php 
					if($flag){
						echo "btn-info";
					}else{
						echo "btn-danger";
					}
					 ?>
				">
					<?php 
					if($flag){
						echo "已添加";
					}else{
						echo "待添加";
					}
					 ?>
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>	
</body>
</html>
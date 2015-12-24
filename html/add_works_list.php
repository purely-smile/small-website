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
	<link rel="stylesheet" href="../css/btn.css">
</head>
<body>
<!-- 添加菜单片段 -->
	<?php include'../segment/menu.php' ?>
<div class="col-md-10 main">
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
			//设置遍历worklist的语句,条件是指定的时间内
			$namesql="select * from worklist where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
			//echo $namesql;
			//执行sql语句
			$flags=$pdo->query($namesql);
			//获取受影响条目
			$flag = $flags->rowCount();
			//遍历当前的考勤表
			foreach ($flags as $time){
			}
			 ?>
			 <!-- 开始循环填充数据 -->
			<tr>
			<!-- 填充id -->
				<td><?php echo $key['id'];?></td>
			<!-- 填充name，同时给予a链接，便于添加 -->
				<td><a class="btn btn-success" <?php
				//判断当天是否添加过数据，或者是否是下午 
				if(!$flag||$timecur>$timemid){
				echo "href=../admin/add_list.php?name=".$key['name'];	
				}

				 ?> title="添加">
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
				<td class="<?php 
					if($flag){
						echo "btn-info";
					}else{
						echo "btn-danger";
					}
					 ?>"><?php 
					if($flag){
						echo "已添加";
					}else{
						echo "待添加";
					}
					 ?></td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</div>	
</body>
</html>
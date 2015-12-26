
<div class="pull-right date">
<form action="find_salary_bydate.php" method="post" class="form-inline">从
<input class="form-control" type="text" id="datepicker" name="start">到
<!-- 日期选择器1 -->
<input class="form-control" type="text" id="datepicker1" name="end">
<!-- 日期选择器2 -->
<input class="btn btn-info" type="submit" value="查询">

<a target="mainFrame" href="view_salary_list.php?date=today" class="btn btn-default">今天</a>
<a target="mainFrame" href="view_salary_list.php?date=yesterday" class="btn btn-default">昨天</a>
<a target="mainFrame" href="view_salary_list.php?date=month" class="btn btn-default">本月</a>
</form>

</div>

<?php  
//默认获取当天的考勤记录
$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
//echo $sql;
$names=$pdo->query($sql);
//遍历获取到的数组，然后获取到的名字
foreach ($names as $key){	
$name_list[]=$key['name'];}
//名字去重复
$name_list=array_unique($name_list);
//print_r($name_list);

 ?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>姓名</th>
			<th>工时</th>
			<th>总工资</th>
			<th>未发工资</th>
		</tr>
	</thead>
	<tbody>
		<!-- 遍历数组内的名字,分别获取对应的工时 -->
		<?php foreach ($name_list as $list):?>
		<!-- 获取指定名字的工单的指定日期的列表 -->
		<?php
		 $tolist="select * from worklist where name='{$list}' and date between '{$timestart}' and '{$timeend}'";
		 // echo $unlist;
		$time_list=$pdo->query($tolist);
		foreach($time_list as $list){
		$total_time=bcadd($total_time, $list['am'],1);
		$total_time=bcadd($total_time, $list['pm'],1);
		$total_salary=$total_time*50/8;
		if($list['sign']==0){
		$untotal_time=bcadd($untotal_time, $list['am'],1);
		$untotal_time=bcadd($untotal_time, $list['pm'],1);
		$untotal_salary=$total_time*50/8;
		}else{
			$untotal_salary=0;
		}
		}
 ?>		
		<tr>
			<td><a class="btn btn-success"  title="发工资" href="../cores/sign_salary.php?name=<?php echo $list['name']; ?>"><?php echo $list['name']; ?></a></td>
			<td><?php echo $total_time; ?></td>
			<td><?php echo $total_salary."元"; ?></td>
			<td><?php echo $untotal_salary."元"; ?></td>
		</tr>
			<!-- 重新初始化工资,进入下个循环 -->
			<?php $total_time=number_format(0, 1); ?>
			<?php $untotal_time=number_format(0, 1); ?>
		<?php endforeach;?>
	</tbody>
</table>
<?php 
$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
//echo $sql;
$names=$pdo->query($sql);
//var_dump($names);
 ?>
	 

<div class="pull-right date">
<div>
<div>
	
</div>
<form action="find_date.php" method="get">
<input type="text" id="datepicker" name="start">到
<input type="text" id="datepicker1" name="end">
<input class="btn btn-info" type="submit" value="查询">

<a target="mainFrame" href="view_works_list.php?date=today" class="btn btn-default">今天</a>
<a target="mainFrame" href="view_works_list.php?date=yesterday" class="btn btn-default">昨天</a>
<a target="mainFrame" href="view_works_list.php?date=month" class="btn btn-default">本月</a>
</form>
</div></div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>编&nbsp;号</th>
			<th>姓&nbsp;&nbsp;名</th>
			<th>工&nbsp;时</th>
			<th>添加日期</th>
			<th>操&nbsp;&nbsp;作</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($names as $key):?>
		<tr>
			<td><?php echo $key['id'];?></td>
			<td><?php echo $key['name'];?></td>
			<td><?php echo $key['am']+$key['pm'];?></td>
			<td><?php 
			$time=$key['date'];
			echo date('Y-m-d H:i:s',$time);
			?></td>
			<td align="center"><input class="btn btn-info" type="button" value="修改" onclick="editWorks(<?php echo $key['id'];?>)"></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
<script type="text/javascript">
	function editWorks(id){
		window.location="edit_work.php?id="+id;
	}
</script>

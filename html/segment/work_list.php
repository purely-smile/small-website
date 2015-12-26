<?php 
$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
//echo $sql;
$names=$pdo->query($sql);
//var_dump($names);
 ?>

<div class="pull-right date">
<div>
	
</div>
<form action="find_works_bydate.php" method="post" class="form-inline">从
<input class="form-control" type="text" id="datepicker" name="start">到
<!-- 日期选择器1 -->
<input class="form-control" type="text" id="datepicker1" name="end">
<!-- 日期选择器2 -->
<input class="btn btn-info" type="submit" value="查询">

<a target="mainFrame" href="view_works_list.php?date=today" class="btn btn-default">今天</a>
<a target="mainFrame" href="view_works_list.php?date=yesterday" class="btn btn-default">昨天</a>
<a target="mainFrame" href="view_works_list.php?date=month" class="btn btn-default">本月</a>
</form>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>姓&nbsp;&nbsp;名</th>
			<th>上&nbsp;午</th>
			<th>下&nbsp;午</th>
			<th>添加日期</th>
			<th>操&nbsp;&nbsp;作</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($names as $key):?>
		<tr>
			<td><a class="btn btn-success" href="./view_detail_work.php?name=<?php echo $key['name'];?>" title="点击查看详情"><?php echo $key['name'];?></a></td>
			<td><?php echo $key['am'];?></td>
			<td><?php echo $key['pm'];?></td>
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

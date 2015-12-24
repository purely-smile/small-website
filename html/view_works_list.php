<?php
//获取考勤表 
require_once('./admin/connect.php');
//设置sql语句在指定的时间戳范围
$date=$_REQUEST["date"];
 ?>

<?php include'./segment/menu.php' ?>
        <div class="col-md-10 main">
<ul class="pull-right date">
<a target="mainFrame" href="view_works_list.php?date=today" class="btn btn-default">今天</a>
<a target="mainFrame" href="view_works_list.php?date=yesterday" class="btn btn-default">昨天</a>
<a target="mainFrame" href="view_works_list.php?date=month" class="btn btn-default">本月</a>
</ul>
<h3>
	<?php 

if($date=='today'){
echo "今天考勤信息";
}elseif ($date=='yesterday') {
echo "昨天考勤信息";
$timestart=$timeyesstart;
$timeend=$timeyesend;
}elseif($date=='month'){
echo "本月考勤信息";
$timestart=$monthstart;
$timeend=$monthend;
}else{
}

$sql="select * from worklist where date between '{$timestart}' and '{$timeend}'";
//echo $sql;
$names=$pdo->query($sql);
//var_dump($names);
	 ?>
</h3>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>编&nbsp;&nbsp;号</th>
			<th>姓&nbsp;&nbsp;名</th>
			<th>工作时间</th>
			<th>添加日期</th>
			<th>操&nbsp;&nbsp;作</th>
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
 </div>
<script type="text/javascript">
	function editWorks(id){
		window.location="edit_work.php?id="+id;
	}
</script>	
<?php include'./segment/footer.php' ?>
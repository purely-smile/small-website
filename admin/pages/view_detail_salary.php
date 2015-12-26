<?php
require_once('../cores/connect.php');
//判断url传递的date值
$name=$_REQUEST["name"];
// echo $name;
$date=$_REQUEST["date"];
// echo $date;

if($date=='today'){
	$date="今天";
}elseif ($date=='yesterday') {
	$date="昨天";
$timestart=$timeyesstart;
$timeend=$timeyesend;
}elseif($date=='month'){
	$date="本月";
$timestart=$monthstart;
$timeend=$monthend;
}else{
	$date="今天";
}

$sql="select * from worklist where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
// echo $sql;
$salarys=$pdo->query($sql);
?>

<?php include'../segment/menu.php' ?>

<div class="col-md-10 main">
<h3><?php echo $name.$date."工资详单"; ?></h3>
 <div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<td>日期</td>
			<td>上午</td>
			<td>下午</td>
		</tr>
	</thead>
	<tbody>
		<!-- 遍历数组内的工资单,分别获取对应的工时 -->
		<?php foreach ($salarys as $salary):?>
		<tr>
			<td><?php 
			$time=$salary['date'];
			echo date('Y-m-d H:i:s',$time);
			?></td>
			<td><?php echo $salary['am']; ?></td>
			<td><?php echo $salary['pm']; ?></td>

		</tr>
		<?php endforeach; ?>		
	</tbody>
</table>
</div>
</div>
<?php include'../segment/footer.php' ?>
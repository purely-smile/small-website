<?php
require_once('../cores/connect.php');
//判断url传递的date值
$name=$_REQUEST["name"];
// echo $name;

if(isset($_COOKIE["timestart"])&&isset($_COOKIE["timeend"])){

$timestart= $_COOKIE["timestart"];
$timeend= $_COOKIE["timeend"];
$datestart=date('Y-m-d',"$timestart");
$dateend=date('Y-m-d',"$timeend");

$sql="select * from worklist where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
// echo $sql;
$works=$pdo->query($sql);
}
?>

<?php include'../segment/menu.php' ?>

<div class="col-md-10 main">
<h3><?php echo $name.$datestart."到".$dateend."考勤详单"; ?></h3>
 <div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<td>日期</td>
			<td>上午</td>
			<td>下午</td>
			<td>状态</td>
		</tr>
	</thead>
	<tbody>
		<!-- 遍历数组内的工资单,分别获取对应的工时 -->
		<?php foreach ($works as $work):?>
		<tr>
			<td><?php 
			$time=$work['date'];
			echo date('Y-m-d H:i:s',$time);
			?></td>
			<td><?php echo $work['am']; ?></td>
			<td><?php echo $work['pm']; ?></td>
			<td><?php if($work['sign']=0){
				echo '未发';
				}else{
				echo '已发';
				}
				 ?></td>

		</tr>
		<?php endforeach; ?>		
	</tbody>
</table>
</div>
</div>
<?php include'../segment/footer.php' ?>
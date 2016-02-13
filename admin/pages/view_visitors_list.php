<?php 
require_once("../cores/connect.php");

include'../segment/menu.php';
$sql="select * from visitors";
$visitors=$pdo->query($sql);
$result_arr = $visitors->fetchAll();
 ?>

 <h3>访客列表</h3>

 <div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>编号</th>
			<th>ip</th>
			<th>位置</th>
			<th>网址</th>
			<th>浏览器</th>
			<th>版本</th>
			<th>时间</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach (array_reverse($result_arr) as $visitor):?>
		<tr>
			<td><?php echo $visitor['id'];?></td>
			<td><?php echo $visitor['ip'];?></td>
			<td><?php echo $visitor['location'];?></td>
			<td><?php echo $visitor['host'];?></td>
			<td><?php echo $visitor['browser'];?></td>
			<td><?php echo $visitor['version'];?></td>
			<td><?php
			$time=$visitor['timeline'];
			echo date('Y-m-d H:i:s',$time);
			?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
</div>


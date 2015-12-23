<?php 
require_once('../admin/connect.php');
$sql='select * from name';
$names=$pdo->query($sql);
//var_dump($names);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>人员列表</title>
 	<link rel="stylesheet" href="../css/bootstrap.css">
 </head>
 <style type="text/css">


th{
	background-color: #ccc;
}
table{
	font: #230230230;
	font-size: 20px;
}
.btn{
	margin-left: 20px;
}
 </style>
 <body>
 <div>
 <h3>人员列表</h3>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>编号</th>
			<th>姓名</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($names as $key):?>
		<tr>
			<td><?php echo $key['id'];?></td>
			<td><?php echo $key['name'];?></td>
			<td align="center"><input class="btn btn-info" type="button" value="修改" onclick="editUser(<?php echo $key['id'];?>)"><input class="btn btn-danger" type="button" value="删除" onclick="delUser(<?php echo $key['id'];?>)"></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
 </div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
function delUser (id) {
	if(window.confirm("确认删除吗？")){
		window.location="../admin/del_use.php?id="+id;
	}
}
function editUser(id){
	window.location="edit_use.php?id="+id;
}
</script>	
 </body>
 </html>
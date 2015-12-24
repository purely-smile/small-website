<?php 
require_once('./admin/connect.php');
$sql='select * from name';
$names=$pdo->query($sql);
//var_dump($names);
 ?>

<?php include'./segment/menu.php' ?>
        <div class="col-md-10 main">
        <h3>添加人员</h3>
        <form action="./admin/add_user.php" method="get" role="from">
            <div class="form-group">
                <input class="form-control" type="text" name="username" id="user" placeholder="请输入名字">
            </div>
            <br>
            <button type="submit" class="btn btn-default">添加</button>
        </form>
 
 <h3>人员列表</h3>
<div class="table-responsive">
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
  </div>
<script type="text/javascript">
function delUser (id) {
	if(window.confirm("确认删除吗？")){
		window.location="./admin/del_use.php?id="+id;
	}
}
function editUser(id){
	window.location="edit_use.php?id="+id;
}
</script>
	
<?php include'./segment/footer.php' ?>
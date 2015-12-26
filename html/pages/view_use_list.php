<?php 
require_once('../cores/connect.php');
$sql='select * from name';
$names=$pdo->query($sql);
//var_dump($names);
 ?>

<?php include'../segment/menu.php' ?>
        <div class="col-md-10 main">
        <form action="../cores/add_user.php" method="post" class="form-inline">
            <h3 style="display: inline-block">添加人员</h3>
            <input class="form-control" type="text" name="username" id="user" placeholder="请输入名字">
			<input type="submit" class="btn btn-default" value="添加">
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
			<td align="center"><input class="btn btn-info" type="button" value="修改" ><input class="btn btn-danger" type="button" value="删除" ></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>
 </div>
  </div>
	
<?php include'../segment/footer.php' ?>
<script type="text/javascript">
	$(".btn-info").click(function(){
		parent=$(this).parents()[1];
		//获取tr下的id文本内容
		id=$(parent).find('td').eq(0).text();
		window.location="edit_use.php?id="+id;
	})	
	$(".btn-danger").click(function(){
		//获取this的上上父对象
		parent=$(this).parents()[1];
		//获取tr下的id文本内容
		id=$(parent).find('td').eq(0).text();
		//获取tr下的name文本内容
		name=$(parent).find('td').eq(1).text();
		if(window.confirm("确认删除"+name+"吗？")){
 		window.location="../cores/del_use.php?id="+id;
		}
	});

</script>
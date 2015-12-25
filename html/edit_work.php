<?php 
require_once("./admin/connect.php");
$id=$_REQUEST["id"];
$sql="select * from worklist where id='{$id}'";
$names=$pdo->query($sql);
//var_dump($names);

foreach($names as $key){
	//print_r($key) ;
}
 ?>
<?php include'./segment/menu.php' ?>
 <div class="col-md-10 main">

	<form action="./admin/editWork.php" method="get" role="form" >
		<table>
			<thead>
				<tr>
					<th><h3><?php echo $key['name']; ?></h3></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>上午</td>
					<td><input type="text" name="am" value="<?php echo $key['am']; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td>下午</td>
					<td><input type="text" name="pm" value="<?php echo $key['pm']; ?>" class="form-control"></td>
				</tr>
				<tr class="hidden">
					<td>id</td>
					<td><input type="text" name="id" value="<?php echo $id; ?>" class="form-control"></td>
				</tr>
				<tr>
					<td><input type="submit"value="修改" class="btn btn-default"></td>
				</tr>
			</tbody>
		</table>

		
	</form>
</div>
	
<?php include'./segment/footer.php' ?>
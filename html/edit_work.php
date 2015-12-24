<?php 
require_once("./admin/connect.php");
$id=$_REQUEST["id"];
$sql="select name,time from worklist where id='{$id}'";
$names=$pdo->query($sql);
//var_dump($names);

foreach($names as $key){
	//print_r($key) ;
}
 ?>
<?php include'./segment/menu.php' ?>
 <div class="col-md-10 main">

	<form action="./admin/editWork.php" method="get" role="form" >
		<h3><?php echo $key['name']; ?></h3>
		<input class="hidden" type="text" name="id" value="<?php echo $id; ?>">
		<label>工时</label><input type="text" name="time" value="<?php echo $key['time']; ?>" class="form-control">
		<input type="submit"value="修改" class="btn btn-default">
	</form>
</div>
	
<?php include'./segment/footer.php' ?>
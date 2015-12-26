<?php 
require_once("../cores/connect.php");
$id=$_REQUEST["id"];
$sql="select id,name from name where id='{$id}'";
$names=$pdo->query($sql);
//var_dump($names);
?>

<?php include'../segment/menu.php' ?>
 <div class="col-md-10 main">
 <?php foreach ($names as $key): ?>
 <h3>修改联系人</h3>
 <form action="../cores/editUse.php" method="get">
 	<input type="text" class="hidden" name="id" value="<?php echo $key['id']; ?>" >
 	<input type="text" name="name" placeholder="<?php echo $key['name']; ?>">
<?php endforeach; ?>
 <input type="submit" value="提交">

 </form>
 </div>
<?php include'../segment/footer.php' ?>
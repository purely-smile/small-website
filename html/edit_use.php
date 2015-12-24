<?php 
require_once("../admin/connect.php");
$id=$_REQUEST["id"];
$sql="select id,name from name where id='{$id}'";
$names=$pdo->query($sql);
//var_dump($names);
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>修改名字</title>
 	    <link rel="stylesheet" href="../css/bootstrap.css">
 	    <link rel="stylesheet" href="../css/btn.css">
 	    <style type="text/css">
 	    .cont{
 	    	width: 500px;
 	    }
 	    </style>
 </head>
 <body>
<?php include'../segment/menu.php' ?>
 <div class="col-md-10 main">
 <?php foreach ($names as $key): ?>
 <h3>修改联系人</h3>
 <form action="../admin/editUse.php" method="get">
 	<input type="text" class="hidden" name="id" value="<?php echo $key['id']; ?>" >
 	<input type="text" name="name" placeholder="<?php echo $key['name']; ?>">
<?php endforeach; ?>
 <input type="submit" value="提交">

 </form>
 </div>
 </body>
 </html>
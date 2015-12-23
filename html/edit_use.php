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
 	    <style type="text/css">
 	    .cont{
 	    	width: 500px;
 	    }
 	    </style>
 </head>
 <body class="cont">
 <div>
 <form action="../admin/editUse.php" method="get">
 <table class="table table-bordered table-hover">
 <tr>
 	<th>编号</th>
 	<th>名字</th>
 </tr>
 <?php foreach ($names as $key): ?>
 <tr>
 	<td><input type="text" name="id" value="<?php echo $key['id']; ?>" ></td>
 	<td><input type="text" name="name" placeholder="<?php echo $key['name']; ?>"></td>
 </tr>
<?php endforeach; ?>
 <tr><td><input type="submit" value="提交"></td></tr>
 </table>
 </form>
 </div>
 </body>
 </html>
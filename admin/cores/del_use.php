<?php 
require_once("connect.php");
$id=$_REQUEST['id'];
$sql="delete from name where id=".$id;
$pdo->exec($sql);

echo "<script>window.location='../pages/view_use_list.php';</script>"

 ?>
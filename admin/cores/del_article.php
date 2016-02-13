<?php 
require_once("connect.php");
$id=$_REQUEST['id'];
$sql="delete from article where id=".$id;
echo $sql;
$pdo->exec($sql);

echo "<script>window.location='../pages/view_article_list.php';</script>"

 ?>
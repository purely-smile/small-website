<?php
require_once('connect.php');
header('Content-type: text/html;charset=utf8'); 
$username=$_GET["username"];
$sql="insert into name(name) values('$username')";
echo $sql;
$res=$pdo->exec($sql);

echo "<script>window.location='../html/index.html';</script>"
?>
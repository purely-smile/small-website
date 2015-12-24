<?php
require_once('connect.php');
$username=$_GET["username"];
$sql="insert into name(name) values('$username')";
echo $sql;
$res=$pdo->exec($sql);

echo "<script>window.location='../view_use_list.php';</script>"
?>
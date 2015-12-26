<?php
require_once("connect.php");
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$sql="update name set name='$name' where id=$id";
$pdo->query($sql);
	echo "<script>window.location='../pages/view_use_list.php'</script>";
 ?>
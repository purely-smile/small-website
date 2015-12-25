<?php 
require_once("../admin/connect.php");
$id=$_REQUEST['id'];
$am=$_REQUEST['am'];
$pm=$_REQUEST['pm'];
if($am+$pm>10){
	echo "<script>alert('工时大于10，请检查是否错误')</script>";
}else{
$sql="update worklist set am='$am' and pm='$pm' where id=$id";
$pdo->query($sql);
}
echo "<script>window.location='../view_works_list.php?date=today'</script>";

 ?>
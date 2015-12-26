<?php 
require_once("connect.php");
$id=$_REQUEST['id'];
$am=$_REQUEST['am'];
$pm=$_REQUEST['pm'];
if($am+$pm>11){
	echo "<script>alert('工时大于11，请检查是否错误')</script>";
}else{
$sql="update worklist set am='$am' and pm='$pm' where id=$id";
$pdo->query($sql);
}
echo "<script>window.location='../pages/view_works_list.php?date=today'</script>";

 ?>
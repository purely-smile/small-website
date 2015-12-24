<?php 
require_once("../admin/connect.php");
$id=$_REQUEST['id'];
$time=$_REQUEST['time'];
if($time>10){
	echo "<script>alert('工时大于10，请检查是否错误')</script>";
}else{
$sql="update worklist set time='$time' where id=$id";
$pdo->query($sql);
}
echo "<script>window.location='../html/view_works_list.php?date=today'</script>";

 ?>
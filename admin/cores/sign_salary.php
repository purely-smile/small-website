<?php 
require_once("../cores/connect.php");
$name=$_REQUEST["name"];
echo $name;
//读取cookie
if(isset($_COOKIE["timestart"])&&isset($_COOKIE["timeend"])){
	echo '123';

$timestart= $_COOKIE["timestart"];
$timeend= $_COOKIE["timeend"];

$sql="update worklist set sign=1 where name='{$name}' and date between '{$timestart}' and '{$timeend}'";
echo $sql;
$names=$pdo->query($sql);
}
echo "<script>window.location='../pages/find_salary_bydate.php'</script>";

//var_dump($names);
?>
<?php
require_once('./admin/connect.php');
//判断url传递的date值
$name=$_REQUEST["name"];
echo $name;
$date=$_REQUEST["date"];
echo $date;
?>

<?php include'./segment/menu.php' ?>
<?php include'./segment/footer.php' ?>
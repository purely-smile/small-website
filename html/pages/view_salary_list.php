<?php
require_once('../cores/connect.php');
//判断url传递的date值
$date=$_REQUEST["date"];
//var_dump($names);
//定义个工时变量,初始化为0
$total_time=number_format(0, 1);
$untotal_time=number_format(0, 1);
//定义个存放名字的空数组
$name_list=array();
?>

<?php include'../segment/menu.php' ?>

<div class="col-md-10 main">
<h3 class="pull-left"><?php 
if($date=='today'){
echo "今天工资列表";
}elseif ($date=='yesterday') {
echo "昨天工资列表";
$timestart=$timeyesstart;
$timeend=$timeyesend;
}elseif($date=='month'){
echo "本月工资列表";
$timestart=$monthstart;
$timeend=$monthend;
}else{
	echo "今天工资列表";
}
?>
</h3>
<?php include'../segment/salary_list.php' ?>
	</div>

	
<?php include'../segment/footer.php' ?>
 <?php include'../segment/datejs.php' ;?>
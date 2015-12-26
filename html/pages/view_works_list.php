<?php
//获取考勤表 
require_once('../cores/connect.php');
//设置sql语句在指定的时间戳范围
$date=$_REQUEST["date"];
 ?>

<?php include'../segment/menu.php' ?>
        <div class="col-md-10 main">

<h3 class="pull-left">
	<?php 

if($date=='today'){
echo "今天考勤信息";
}elseif ($date=='yesterday') {
echo "昨天考勤信息";
$timestart=$timeyesstart;
$timeend=$timeyesend;
}elseif($date=='month'){
echo "本月考勤信息";
$timestart=$monthstart;
$timeend=$monthend;
}elseif($date=='find'){
//include'./admin/find_date.php';
}
?>
</h3>

<?php include'../segment/work_list.php' ?>
	
 </div>

<?php include'../segment/footer.php' ?>

 <?php include'../segment/datejs.php' ?>
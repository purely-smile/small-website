<?php
require_once('../cores/connect.php');
//var_dump($names);
//定义个工时变量,初始化为0
$total_time=number_format(0, 1);
$untotal_time=number_format(0, 1);
//定义个存放名字的空数组
$name_list=array(); 
//引入指定日期处理模块
include'../segment/find_date.php';

//引入页面基础菜单模块
include'../segment/menu.php'; ?>


<div class="col-md-10 main">
<h3 class="pull-left"><?php 
    if (isset($start)&&isset($end)&&isset($sy)){
        echo $sy.'年'.$sm.'月'.$sd.'日到'.$ey.'年'.$em.'月'.$ed.'日工资记录';
    }else{
        echo "未检测到输入信息，请重试";
    }
         ?>
    
	</h3>
<?php include'../segment/salary_list.php'; ?>
	</div>
<?php include'../segment/footer.php' ;?>

 <?php include'../segment/datejs.php' ;?>
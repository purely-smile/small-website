<?php 
//引入指定日期处理模块
include'../segment/find_date.php';
//引入页面基础菜单模块
include'../segment/menu.php'; ?>

<h3><?php 
    if ($start&&$end) {
        echo $sy.'年'.$sm.'月'.$sd.'日到'.$ey.'年'.$em.'月'.$ed.'日考勤记录';
    }else{
        echo "未检测到输入信息，请重试";
    }
         ?>
    
	</h3>
<?php include'../segment/work_list.php'; ?>
<?php include'../segment/footer.php'; ?>

 <?php include'../segment/datejs.php' ;?>
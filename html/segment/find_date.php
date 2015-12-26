<?php 
require_once('../cores/connect.php');
//获取提交过来的日期
if(isset($_POST['start'])&&isset($_POST['end'])){



$start=$_POST['start'];
$end=$_POST['end'];
//print_r($_POST);
if ($start&&$end) {
//把日期字符串处理成数组
$arrstart = explode('-',$start);
$arrend = explode('-',$end);
//对应的数组转换为具体日期
$sy=$arrstart[0];
$sm=$arrstart[1];
$sd=$arrstart[2];

$ey=$arrend[0];
$em=$arrend[1];
$ed=$arrend[2];

$findstart=mktime(0,0,0,$sm,$sd,$sy);
$findend=mktime(0,0,0,$em,$ed,$ey);
//排除用户输入反，查询不到的情况
    if($findstart<$findend){
        $timestart=$findstart;
        $timeend=$findend;
    }else{
        $timestart=$findend;
        $timeend=$findstart;
    }
setcookie("timestart", $findstart,time()+600,"/admin/");
setcookie("timeend", $findend,time()+600,"/admin/");
}}else{
	$timestart= $_COOKIE["timestart"];
	$timeend= $_COOKIE["timeend"];
}
// echo $findstart."<br>";

// echo $findend;
// print_r($arrstart);
// print_r($arrend);
 ?>
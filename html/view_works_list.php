<?php
//获取考勤表 
require_once('./admin/connect.php');
//设置sql语句在指定的时间戳范围
$date=$_REQUEST["date"];
 ?>

<?php include'./segment/menu.php' ?>
        <div class="col-md-10 main">

<h3>
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

<?php include'./segment/work_list.php' ?>
	
 </div>

<?php include'./segment/footer.php' ?>

    <script src="http://cdn.staticfile.org/moment.js/2.2.1/moment.min.js"></script>
    <script src="./plugins/pikaday/pikaday.js"></script>
    <script>
    var picker = new Pikaday({
        field: document.getElementById('datepicker'),
        firstDay: 1,
        minDate: new Date(2015-01-01),
        maxDate: new Date(2020-12-31),
        yearRange: [2015, 2020],
        i18n: {
            previousMonth: '上个月',
            nextMonth: '下个月',
            months: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            weekdays: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            weekdaysShort: ['日', '一', '二', '三', '四', '五', '六']
        }
    });
    var picker = new Pikaday({
        field: document.getElementById('datepicker1'),
        firstDay: 1,
        minDate: new Date(2015-01-01),
        maxDate: new Date(2020-12-31),
        yearRange: [2015, 2020],
        i18n: {
            previousMonth: '上个月',
            nextMonth: '下个月',
            months: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            weekdays: ['周日', '周一', '周二', '周三', '周四', '周五', '周六'],
            weekdaysShort: ['日', '一', '二', '三', '四', '五', '六']
        }
    });
    </script>
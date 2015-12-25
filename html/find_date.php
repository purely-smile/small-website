<?php 
require_once('./admin/connect.php');
//获取提交过来的日期
$start=$_GET['start'];
$end=$_GET['end'];
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

$timestart=mktime(0,0,0,$sm,$sd,$sy);
$timeend=mktime(0,0,0,$em,$ed,$ey);

// echo $findstart."<br>";

// echo $findend;
// print_r($arrstart);
// print_r($arrend);
 ?>

<?php include'./segment/menu.php' ?>
        <div class="col-md-10 main">

<h3>指定日期考勤表
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
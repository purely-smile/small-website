<?php 
//引入指定日期处理模块
include'../segment/find_date.php';
//引入页面基础菜单模块
include'../segment/menu.php'; ?>
        <div class="col-md-10 main">

<h3 class="pull-left"><?php 
    if ($start&&$end) {
        echo $sy.'年'.$sm.'月'.$sd.'日到'.$ey.'年'.$em.'月'.$ed.'日考勤记录';
    }else{
        echo "未检测到输入信息，请重试";
    }
         ?>
    
	</h3>
<?php include'../segment/work_list.php' ?>
	</div>
<?php include'../segment/footer.php' ?>

    <script src="../plugins/pikaday/moment.js"></script>
    <script src="../plugins/pikaday/pikaday.js"></script>
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
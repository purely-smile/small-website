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
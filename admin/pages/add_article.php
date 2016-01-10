<?php 
require_once('../cores/connect.php');

// //排除重复添加的可能
// $sqlname='select * from name';
// //读取员工表
// $names=$pdo->query($sqlname);
 ?>
 <?php include'../segment/menu.php' ?>
 <link rel="stylesheet" type="text/css" href="../plugins/umeditor/themes/default/css/umeditor.css">
    <script type="text/javascript" src="../plugins/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../plugins/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../plugins/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../plugins/umeditor/lang/zh-cn/zh-cn.js"></script>
     <style type="text/css">
        h1{
            font-family: "微软雅黑";
            font-weight: normal;
        }
        .btn {
            display: inline-block;
            *display: inline;
            padding: 4px 12px;
            margin-bottom: 0;
            *margin-left: .3em;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
            cursor: pointer;
            background-color: #f5f5f5;
            *background-color: #e6e6e6;
            background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            border: 1px solid #cccccc;
            *border: 0;
            border-color: #e6e6e6 #e6e6e6 #bfbfbf;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            border-bottom-color: #b3b3b3;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
            *zoom: 1;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            color: #333333;
            background-color: #e6e6e6;
            *background-color: #d9d9d9;
        }

        .btn:active,
        .btn.active {
            background-color: #cccccc \9;
        }

        .btn:first-child {
            *margin-left: 0;
        }

        .btn:hover,
        .btn:focus {
            color: #333333;
            text-decoration: none;
            background-position: 0 -15px;
            -webkit-transition: background-position 0.1s linear;
            -moz-transition: background-position 0.1s linear;
            -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear;
        }

        .btn:focus {
            outline: thin dotted #333;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .btn.active,
        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .btn.disabled,
        .btn[disabled] {
            cursor: default;
            background-image: none;
            opacity: 0.65;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
    </style>
</head>
<body>
<div class="container summary">
<h3 style="text-align: center">添加文章</h3>

<!--style给定宽度可以影响编辑器的最终宽度-->
<form action="../cores/add.article.php" method="post" enctype="multipart/form-data">
	<h4>文章标题：</h4><input name="title" type="text" class="form-control" placeholder="请输入标题">
	<h4>文章类别：</h4><select name="sort" class="form-control">
					<option >葡萄资讯</option>
					<option >种植技术</option>
					<option >系统公告</option>

		</select>
	<h4>添加缩略图:(280*160)</h4>	<input type="file" name="image">
    <h4>内容简要：</h4><textarea name="summary" class="form-control" rows="3"></textarea>
    <h4>正文内容:</h4>
<script type="text/plain" id="myEditor" style="width:100%;height:340px;">
    
</script>

	<input type="submit" name="" value="提交">
</form>
</div>
<div class="clear"></div>


<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
    
</script>

</body>
</html>
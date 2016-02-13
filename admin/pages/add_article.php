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
    <link rel="stylesheet" type="text/css" href="../css/article.css">
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
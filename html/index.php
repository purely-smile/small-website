<?php require_once("../admin/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">	
</head>
<body>
<!-- 头部信息 -->
<div class="head">
	<h3>智能管理系统</h3>
</div>
<!-- 主体内容 -->
<div class="content">
<!-- 左侧功能菜单 -->
	<div class="menu">
	<div class="title">功能面板</div>
	<ul class="list-unstyled">
		<li><a href="index.html" title="添加人员" target="mainFrame">添加人员</a></li>
		<li><a href="view_use_list.php" title="查看列表" target="mainFrame">查看列表</a></li>
		<li><a href="add_works_list.php" title="添加考勤" target="mainFrame">添加考勤</a></li>
		<li><a href="view_works_list.php" title="查看考勤" target="mainFrame">查看考勤</a></li>
	</ul>
	</div>
	<!-- 右侧详细信息 -->
	<div class="cont">
		<div class="title">详细信息</div>
		<iframe src="../admin/main.php" name="mainFrame"></iframe>
	</div>
</div>	
</body>
</html>
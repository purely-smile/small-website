<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../admin/images/favicon.ico">
    <!-- 设置页面链接全部在父页面打开 -->
    <base target="_parent" />
    <title>后台管理</title>
    <link rel="stylesheet" href="../../admin/css/bootstrap.css">
    <link rel="stylesheet" href="../../admin/css/btn.css">
    <link rel="stylesheet" href="../../admin/plugins/pikaday/pikaday.css">
</head>
<body>
<!-- 头部信息 -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../../admin/index.php" title="系统信息" class="active">系统信息</a></li>
            <li><a href="../../admin/pages/view_use_list.php" title="员工操作" >员工操作</a></li>
           <li class="dropdown">
          <a href="##" data-toggle="dropdown" class="dropdown-toggle">员工考勤<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../../admin/pages/add_works_list.php" title="添加考勤" >添加考勤</a></li>
            <li><a href="../../admin/pages/view_works_list.php?date=today" title="查看考勤" >查看考勤</a></li>
            <li><a href="../../admin/pages/view_salary_list.php?date=today" title="结算工资" >结算工资</a></li>
          </ul>
       </li>
          <li class="dropdown">
          <a href="##" data-toggle="dropdown" class="dropdown-toggle">内容管理<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../../admin/pages/add_article.php" title="添加文章" >添加文章</a></li>
            <li><a href="../../admin/pages/view_article_list.php" title="查看文章" >查看文章</a></li>
          </ul>
       </li>
            <li><a href="../../admin/pages/view_visitors_list.php" title="查看访客" >查看访客</a></li>
          </ul>
        </div>
      </div>
    </div>

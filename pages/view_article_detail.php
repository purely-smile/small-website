<?php 
require_once('../admin/cores/connect.php');
$id=$_REQUEST['id'];
$sql="select * from article where id='{$id}'";
$articles=$pdo->query($sql);
//获取对象里的数组
$result_arr = $articles->fetchAll()[0];
//var_dump($result_arr);
$date = $result_arr['timeline'];
 ?>
 <!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $result_arr['title']; ?> 一新葡萄园</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/article.css">
</head>
 <body>
 <?php include '../segments/header.php' ?>
  <div class="bgcolor">
     <h1><?php echo $result_arr['title']; ?></h1>
      </div>
 <div class="container summary">
 <div class="col-md-9">

     <h5 class="pull-right">发布时间:<?php echo date('Y-m-d H:m:s',"$date") ?></h5>
     <div class="main">
         <?php echo $result_arr['main']; ?>
     </div>
 </div>
 <div class="col-md-3">
     
 </div>
   </div>
<?php include '../segments/footer.php' ?>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>	
 </body>
 </html>
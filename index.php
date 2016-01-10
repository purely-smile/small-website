<?php 
require_once('./admin/cores/connect.php');

$sql="select * from article";
$articles=$pdo->query($sql);
//获取对象里的数组
$result_arr = $articles->fetchAll();
//var_dump($articles);
//print_r($result_arr);
 ?>

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>一新葡萄园官网</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/ad.css">
</head>

<body>
     <?php include './segments/header.php' ?>
    <!-- 轮播图 -->
    <div id="ad-carousel" class="carousel slide" data-ride="carousel">
        <!--轮播图片的导航点-->
        <ol class="carousel-indicators">
            <li data-target="#ad-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#ad-carousel" data-slide-to="1"></li>
            <li data-target="#ad-carousel" data-slide-to="2"></li>
            <li data-target="#ad-carousel" data-slide-to="3"></li>
            <li data-target="#ad-carousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="./images/1.jpg" alt="1 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Google Chrome，又称Google浏览器，是一个由Google（谷歌）公司开发的网页浏览器。</p>
                        <h1>Chrome</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/2.jpg" alt="2 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Mozilla Firefox，中文名通常称为“火狐”或“火狐浏览器”，是一个开源网页浏览器。</p>
                        <h1>Firefox</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/3.jpg" alt="3 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Safari，是苹果计算机的最新操作系统Mac OS X中的浏览器。</p>
                        <h1>Safari</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/4.jpg" alt="4 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Opera</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/5.jpg" alt="5 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Internet Explorer，简称 IE，是微软公司推出的一款网页浏览器。</p>
                        <h1>IE</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--左右切换按钮-->
        <a class="left carousel-control" href="#ad-carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#ad-carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- 正文内容 -->
    <div class="container summary">
        <div class="col-md-9">
            <h3>资讯列表</h3>
            <hr>
            <?php foreach (array_reverse($result_arr) as $article)://使用reverse逆序遍历?>
            <div class="course-item-content clearfix">
                <div class="thumbnail">
                    <div class="thumbnail-inner">
                        <a href="./pages/view_article_detail.php?id=<?php echo $article['id'] ?>" target="_blank"><img src="./admin/uploads/<?php echo $article['image'] ?>"></a>
                    </div>
                </div>
                <div class="introduction">
                    <h2 class="title autowrap"><a href="./pages/view_article_detail.php?id=<?php echo $article['id'] ?>" target="_blank"><?php echo $article['title'] ?></a></h2>
                    <div class="description autowrap">内容简介：<?php echo $article['summary'] ?></div>
                    
                </div>
            </div>
            <hr>
            <?php endforeach ?>
           
        </div>
        <div class="col-md-3">
            <h3>系统公告</h3>
            <hr>
            <div class="panel panel-primary">
                <div class="panel-heading">图解CSS3</div>
                <div class="panel-body">详细讲解了选择器、边框、背景、文本、颜色、盒模型、伸缩布局盒模型、多列布局、渐变、过渡、动画、媒体、响应Web设计、Web字体等主题下涵盖的所有CSS3新特性</div>
                <div class="panel-footer">作者：大漠</div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">图解CSS3</div>
                <div class="panel-body">详细讲解了选择器、边框、背景、文本、颜色、盒模型、伸缩布局盒模型、多列布局、渐变、过渡、动画、媒体、响应Web设计、Web字体等主题下涵盖的所有CSS3新特性</div>
                <div class="panel-footer">作者：大漠</div>
            </div>
        </div>
    </div>
<?php include './segments/footer.php' ?>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
</body>

</html>

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
    <title>绿色葡萄园官网</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./segments/css/style.css">
</head>

<body>
     <?php include './segments/header.php' ?>
    <!-- 轮播图 -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!--轮播图片的导航点-->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="./images/1.jpg" alt="1 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>1</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/2.jpg" alt="2 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>2</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/3.jpg" alt="3 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>3</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/4.jpg" alt="4 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>4</h1>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="./images/5.jpg" alt="5 slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>5</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--左右切换按钮-->
        <a class="left carousel-control" href="#carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel" data-slide="next"><span
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
                        <a href="./pages/view_article_detail.php?id=<?php echo $article['id'] ?>" target="_blank"><img src="./admin/uploads/<?php echo $article['image'] ?>"></a>
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
            <div class="fix">
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
    </div>

    <div class="toolbar">
    <a href="javascript:;" class="toolbar-item toolbar-item-weixin">
        <span class="toolbar-layer"></span>
    </a>
    <a href="javascript:;" class="toolbar-item toolbar-item-feedback"></a>
    <a href="javascript:;" class="toolbar-item toolbar-item-app">
        <span class="toolbar-layer"></span>
    </a>
    <a href="javascript:;" class="toolbar-item toolbar-item-top"></a>
</div>

<?php include './segments/footer.php' ?>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/hover.js"></script>
    <script src="./segments/js/require.js" data-main="./segments/js/main"></script>
</body>

</html>

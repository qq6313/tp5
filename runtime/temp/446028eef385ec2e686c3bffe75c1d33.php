<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\twothink\public/../application/home/view/default/life\index.html";i:1507437981;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="__STATIC__/bootstrap1/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .main{margin-bottom: 60px;}
        .indexLabel{padding: 10px 0; margin: 10px 0 0; color: #fff;}
    </style>
</head>
<body>
<div class="main">
    <!--导航部分-->
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid text-center">
            <div class="col-xs-3">
                <p class="navbar-text"><a href="index.html" class="navbar-link">首页</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">服务</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">发现</a></p>
            </div>
            <div class="col-xs-3">
                <p class="navbar-text"><a href="#" class="navbar-link">我的</a></p>
            </div>
        </div>
    </nav>
    <!--导航结束-->
    <?php foreach($document as $i=>$d):?>
    <div class="container-fluid">
        <div class="row noticeList">
            <a href="<?php echo url('article?id='.$d['id']); ?>">
                <div class="col-xs-2">
                    <img class="noticeImg" src="<?php echo $picture[$i]; ?>"/>
                </div>
                <div class="col-xs-10">
                    <p class="title"><?php echo $d['title']; ?></p>
                    <p class="intro"><?php echo $d['description']; ?></p>
                    <p class="info">浏览: <?php echo $d['view']; ?> <span class="pull-right"><?php echo time_format($d['create_time']); ?></span> </p>
                </div>
            </a>
        </div>
    </div>


    <?php endforeach;?>
    <!--<td colspan="6" class="text-center"> aOh! 暂时还没有内容! </td>-->



</div>
<div class="page">

</div>
<!-- jQuery (necessary for bootstrap1's JavaScript plugins) -->
<script src="__STATIC__/jquery-1.11.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="__STATIC__/bootstrap1/js/bootstrap.min.js"></script>
</body>
</html>
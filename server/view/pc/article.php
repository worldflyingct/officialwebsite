<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
        <meta name="description" content="<?php WebsiteDescription ();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="imgs/favicon.ico">
        <link rel="stylesheet" href="css/winit.css">
        <link rel="stylesheet" href="css/wbootstrap.css">
        <link rel="stylesheet" href="css/wnews.css">
        <link rel="stylesheet" type="text/css" href="css/xinnav.css">
        <title><?php ArticleTitle ();?>_<?php WebsiteImportantWord ();?>_沃航科技</title>
        <script src="js/wjquery-3.1.0.min.js"></script>
        <script src="js/wbootstrap.min.js"></script>
        <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
    </head>
<body>
<?php require("view/pc/header.php");?>
<div class="top-bg">
    <img src="imgs/news/news-bg.png" alt="">
</div>
<div class="textt">
    <h1><?php ArticleTitle ();?></h1>
    <h3><?php ArticlePublicTime ();?></h3>
    <div class="top-content">
        <?php ArticleContext ();?>
    </div>
    <div class="xia">
        <p>优秀解决方案推荐：<a href="agriculture.html">智慧农业解决方案</a></p>
<?php if (CheckPreviousArticle ()) { ?>
        <p>上一篇：<a href="article-id-<?php PreviousArticleId ();?>.html"><?php PreviousArticleTitle ();?></a></p>
<?php } ?>
<?php if (CheckNextArticle ()) { ?>
        <p>下一篇：<a href="/index-news-news-id-<?php NextArticleId ();?>.html"><?php NextArticleTitle ();?></a></p>
<?php } ?>
    </div>
</div>
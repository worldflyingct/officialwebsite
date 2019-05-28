<?php
$articleid = $_GET["id"];
$previousArticleId =GetPreviousArticleId ($articleid);
$nextArticleId = GetNextArticleId ($articleid);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php ArticleTitle ();?>_<?php WebsiteImportantWord ();?>_沃航科技</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/flexible_css.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link href="<?php AssetsUrl ();?>/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/flexible.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/swiper.min.css"/>
    <style>
        p{
            text-indent: 22px;
        }
        .article-link {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<!--侧滑菜单容器-->
<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable">
<?php require ("view/mobile/header.php");?>
<div class="mui-inner-wrap">
        <header class="mui-bar mui-bar-nav">
            <div class="nav_logo">
                <img src="<?php AssetsUrl ();?>/imgs/phone/wlogo2.png" alt="<?php WebsiteImportantWord ();?>">
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll">
                <img src="<?php AssetsUrl ();?>/imgs/news-bg.png" style="width: 100%;" alt="<?php WebsiteImportantWord ();?>">
                <div class="box3">
                    <p class="product-title1"><?php ArticleTitle ($articleid);?></p>
                    <p class="product-title2"><?php ArticlePublicTime ($articleid);?></p>
                    <div class="about-content-box"><?php ArticleContent ($articleid);?></div>
                    <div class="article-link">
                        <p>优秀解决方案推荐：<a href="<?php SiteUrl ();?>/mobileagriculture.html">智慧农业解决方案</a></p>
<?php if ($previousArticleId != 0) { ?>
                        <p>上一篇：<a href="<?php SiteUrl ();?>/mobilearticle-id-<?php echo $previousArticleId;?>.html"><?php PreviousArticleTitle ($articleid);?></a></p>
<?php } ?>
<?php if ($nextArticleId != 0) { ?>
                        <p>下一篇：<a href="<?php SiteUrl ();?>/mobilearticle-id-<?php echo $nextArticleId;?>.html"><?php NextArticleTitle ($articleid);?></a></p>
<?php } ?>
                    </div>
                </div>
<?php require("view/mobile/footer.php");?>
            </div>
        </div>
        <!-- off-canvas backdrop -->
        <div class="mui-off-canvas-backdrop"></div>
	</div>
</div>
<script>
mui('.mui-scroll-wrapper').on('tap','a' ,function(){location.href = this.getAttribute('href')});
mui.init({
    swipeBack: false,
});
mui('.mui-scroll-wrapper').scroll({
    deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
});
</script>
</body>
</html>
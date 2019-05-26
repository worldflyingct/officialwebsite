<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$type = isset($_GET["type"]) ? $_GET["type"] : 0;
$totalpage = GetNewsTotalPage (5, $type);
$newsList = GetNewsList ($page, 5, $type);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_新闻资讯</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/flexible_css.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link href="<?php AssetsUrl ();?>/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/flexible.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/swiper.min.css"/>
    <style>
        .take-more {
            margin-bottom: 10px;
        }
        .active{
            color: #fff !important;
            background: #298be2;
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
                <img src="<?php AssetsUrl ();?>/imgs/wlogo2.png" alt="武汉app开发"/>
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll">
                <img src="<?php AssetsUrl ();?>/imgs/news-bg.png" style="width: 100%;" alt="武汉app开发">
                <div class="box3">
                    <p class="product-title1">新闻动态</p>
                    <p class="product-title2">News information</p>
                    <ul class="product-ul">
<?php if ($type == 0) { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right active" href="#">ALL+</a></li>
<?php } else { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right" href="<?php SiteUrl ();?>/mobilenews.html">ALL+</a></li>
<?php } ?>
<?php if ($type == 1) { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right active" href="#">公司动态</a></li>
<?php } else { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right" href="<?php SiteUrl ();?>/mobilenews-type-1.html">公司动态</a></li>
<?php } ?>
<?php if ($type == 2) { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right active" href="#">媒体报道</a></li>
<?php } else { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right" href="<?php SiteUrl ();?>/mobilenews-type-2.html">媒体报道</a></li>
<?php } ?>
<?php if ($type == 3) { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right active" href="#">行业资讯</a></li>
<?php } else { ?>
                        <li class="mui-table-view-cell"><a class="mui-navigate-right" href="<?php SiteUrl ();?>/mobilenews-type-3.html">行业资讯</a></li>
<?php } ?>
                    </ul>
                    <section class="news-change">
                        <ul style="opacity: 1;">
<?php foreach ($newsList as $news) { ?>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilearticle-id-<?php echo $news["ID"];?>.html">
                                <div class="news-box-top">
                                    <div class="news-box-left">
                                        <p><?php echo $news["title"];?></p>
                                        <p><?php echo $news["publishtime"];?></p>
                                    </div>
                                    <div class="news-box-right"><img src="<?php AssetsUrl ();?>/imgs/jian.png" alt="武汉app开发"/></div>
                                </div>
                                </a>
                                <p class="news-content"><?php echo $news["desc"];?></p>
                            </li>
<?php } ?>
                        </ul>
                        <div class="take-more">
                            <div class="take-more1" >
                                <a href="<?php SiteUrl ();?>/mobilenews<?php if ($type != 0) echo "-type-".$type;?>.html">
                                    <img src="<?php AssetsUrl ();?>/imgs/first.png" alt="武汉app开发">
                                </a>
<?php if ($page == 1) { ?>
                                <a href="#">
                                    <img src="<?php AssetsUrl ();?>/imgs/left.png" alt="武汉app开发">
                                </a>
<?php } else { ?>
                                <a href="<?php SiteUrl ();?>/mobilenews-page-<?php echo $page-1;if ($type != 0) echo "-type-".$type;?>.html">
                                    <img src="<?php AssetsUrl ();?>/imgs/left.png" alt="武汉app开发">
                                </a>
<?php } ?>
                            </div>
                            <span>第 <?php echo $page;?> 页</span>
                            <div class="take-more1" style="float: right;">
<?php if ($page == $totalpage) { ?>
                                <a href="#"><img src="<?php AssetsUrl ();?>/imgs/right.png" alt="武汉app开发"></a>
<?php } else { ?>
                                <a href="<?php SiteUrl ();?>/mobilenews-page-<?php echo $page+1;if ($type != 0) echo "-type-".$type;?>.html"><img src="<?php AssetsUrl ();?>/imgs/right.png" alt="武汉app开发"></a>
<?php } ?>
                                <a href="<?php SiteUrl ();?>/mobilenews-page-<?php echo $totalpage;if ($type != 0) echo "-type-".$type;?>.html"><img src="<?php AssetsUrl ();?>/imgs/last.png" alt="武汉app开发"></a>
                            </div>
                        </div>
                    </section>
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
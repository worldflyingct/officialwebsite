<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$totalpage = 2;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_物联网</title>
    <script src="<?php AssetsUrl ();?>/js/jquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/inter.css">
</head>
<body>
<!-- 侧滑导航根容器 -->
<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable">
<?php require ("view/mobile/header.php");?>
    <!-- 主页面容器 -->
    <div class="mui-inner-wrap">
        <!-- 主页面标题 -->
        <header class="mui-bar mui-bar-nav">
            <div class="nav_logo">
                <img src="<?php AssetsUrl ();?>/imgs/phone/wlogo2.png" alt="<?php WebsiteImportantWord ();?>">
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll">
                <!-- 主界面具体展示内容 -->
                <div class="box">
                    <a href="#">
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg1.png" >
                    </a>
                </div>
                <div class="box1">
                    <p class="inter-title1">解决方案</p>
                    <p class="inter-title2">solution</p>
                </div>
                <div class="box2">
                    <div class="farming">
                        <ul class="xianshi" id="traking">
<?php if ($page == 1) { ?>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilegym.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/save.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>仓储管理系统</p>
                                        <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性。采用分散控制、集中管理的结构，使得系统可扩充性很强。</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobileagriculture.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/smai.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>智慧农业</p>
                                        <p>主要由农业温室大棚、各种无线传感器、控制器及后台系统软件和用户端APP等组成。</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilepowerful.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/selec.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>电力远程控制</p>
                                        <p>是基于互联网的数据远程实时传输以及数据远程控制功能开发的。</p>
                                    </div>
                                </a>
                            </li>
<?php } else if ($page == 2) { ?>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilecinema.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/smovie.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>影院服务平台</p>
                                        <p>影院服务平台方案包含线上用户端小程序与影院后台两个部分，线下无纸化检票系统。</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilecybercafe.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sdian.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>无人网吧</p>
                                        <p>利用app开门，支付宝/微信收费的方式实现无人化，24小时营业的无人网吧</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php SiteUrl ();?>/mobilecommunity.html">
                                    <div class="pic1">
                                        <p></p>
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sdas.png" alt="<?php WebsiteImportantWord ();?>">
                                        <span></span>
                                    </div>
                                    <div class="text1">
                                        <p>智慧小区</p>
                                        <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性。采用分散控制、集中管理的结构，使得系统可扩充性很强。</p>
                                    </div>
                                </a>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="box3">
                    <div class="page">
<?php if ($page == 1) { ?>
                        <a href="#" class="shang">上一页</a>
<?php } else if ($page == 2) { ?>
                        <a href="<?php SiteUrl ();?>/mobilesolution.html" class="shang">上一页</a>
<?php } else { ?>
                        <a href="<?php SiteUrl ();?>/mobilesolution-page-<?php echo $page-1;?>.html" class="shang">上一页</a>
<?php } ?>
                        <p><?php echo $page;?>/<?php echo $totalpage;?></p>
<?php if ($page == $totalpage) { ?>
                        <a href="#" class="xia">下一页</a>
<?php } else { ?>
                        <a href="<?php SiteUrl ();?>/mobilesolution-page-<?php echo $page+1;?>.html" class="xia">下一页</a>
<?php } ?>
                    </div>
                </div>
<?php require("view/mobile/footer.php");?>
            </div>
            <div class="mui-off-canvas-backdrop"></div>
        </div>
    </div>
</div>
<script>
mui('.mui-scroll-wrapper').on('tap','a' ,function(){location.href = this.getAttribute('href')});
mui.init({
    swipeBack: false,
})
mui('.mui-scroll-wrapper').scroll({
    deceleration: 0.0005
    //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
})
$('#traking').on('tap','li',function(){
    location.href = $(this).attr('data');
})
$('#trak').on('tap','li',function(){
    location.href = $(this).attr('data');
})
</script>
</body>
</html>
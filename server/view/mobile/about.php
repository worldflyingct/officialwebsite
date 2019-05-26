<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_关于我们</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/jquery-3.1.0.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?php AssetsUrl ();?>/js/swiper.jquery.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/flexible.js"></script>
    <script src="<?php AssetsUrl ();?>/js/flexible_css.js"></script>
    <script src="<?php AssetsUrl ();?>/js/jweixin-1.2.0.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link href="<?php AssetsUrl ();?>/css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/flexible.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/swiper.min.css"/>
    <style>
        html,body {
            background-color: #efeff4;
        }
        p {
            text-indent: 22px;
        }
        span.mui-icon {
            font-size: 14px;
            color: #007aff;
            margin-left: -15px;
            padding-right: 10px;
        }
        .mui-off-canvas-right {
            color: #fff;
        }
        .title {
            margin: 35px 15px 10px;
        }
        .title .content {
            margin: 10px 15px 35px;
            color: #bbb;
            text-indent: 1em;
            font-size: 14px;
            line-height: 24px;
        }
        input {
            color: #000;
        }
        .swiper-slide {
            padding: 5%;
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
                <img src="<?php AssetsUrl ();?>/imgs/wphone/logo.png" alt="<?php WebsiteImportantWord ();?>"/>
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
        <div class="mui-scroll">
            <img src="<?php AssetsUrl ();?>/imgs/wphone/about-bg.png" style="width: 100%;margin-bottom: 5%;" alt="<?php WebsiteImportantWord ();?>">
            <div class="about-box3">
                <div class="title-box">
                    <p class="about-title1">我们是谁</p>
                    <p class="about-title2">懂您所需，做您所想</p>
                </div>
                <p style="color: #6a6763;">沃航（武汉）科技股份有限公司是一家充满活力，极具创意，逐梦的年轻化团队，主要从事软件外包,技术解决方案的互联网科技公司，以精湛的技术、丰富的经验、优质的服务来为客户提供互联网一站式解决方案，公司总部位于由雷军李儒雄等人扶持创办的创业特区光谷SBI创业街。</p>
                <p style="color: #6a6763;">客户都是各行各业的，例如教育、金融、社交网络、旅游、电力、商城、物流等，他们在众多家的软件外包公司当中抉择，为什么最终选择我们？必然是感受到了我们的诚意以及专业性，不论从与客户洽谈还是到后期服务，我们始终秉承“科技服务”理念，推动数字化，信息化进程，提供专业化的解决方案根据客户需求给出更为合理、专业、贴合实际、易被大众接受的解决方案。</p>
            </div>
            <div class="box3">
                <p class="product-title1">我们的理念</p>
                <p class="product-title2">懂您所需，做您所想</p>
                <div class="about-content-box">
                    <div class="content-box-left">
                    <img src="<?php AssetsUrl ();?>/imgs/wphone/about1.png" alt="<?php WebsiteImportantWord ();?>"/>
                </div>
                <div class="content-box-right">
                    <p class="content-p1">沃航特点</p>
                    <p class="content-p2">沃航科技的理念是推动数字化，信息化进程，提供专业的解决方案。</p>
                </div>
            </div>
            <div class="about-content-box">
                <div class="content-box-right" style="margin-left: 0;margin-right: 8%;">
                    <p class="content-p1">沃航文化</p>
                    <p class="content-p2">用最专业的技术，最良好的态度服务客户，用质量铸就品牌。</p>
                </div>
                <div class="content-box-left">
                    <img src="<?php AssetsUrl ();?>/imgs/wphone/about2.png" alt="<?php WebsiteImportantWord ();?>"/>
                </div>
            </div>
            <div class="about-content-box">
                <div class="content-box-left">
                    <img src="<?php AssetsUrl ();?>/imgs/wphone/about3.png" alt="<?php WebsiteImportantWord ();?>"/>
                </div>
                <div class="content-box-right">
                    <p class="content-p1">沃航使命</p>
                    <p class="content-p2">用技术推进发展，用专业改变世界</p>
                </div>
            </div>
            <div class="about-content-box">
                <div class="content-box-right" style="margin-left: 0;margin-right: 8%;">
                    <p class="content-p1">沃航愿景</p>
                    <p class="content-p2">成为世界一流的技术解决方案服务提供商</p>
                </div>
                <div class="content-box-left">
                    <img src="<?php AssetsUrl ();?>/imgs/wphone/about4.png" alt="<?php WebsiteImportantWord ();?>"/>
                </div>
            </div>
            <div class="about-content-box">
                <div class="content-box-left">
                    <img src="<?php AssetsUrl ();?>/imgs/wphone/about1.png" alt="<?php WebsiteImportantWord ();?>"/>
                </div>
                <div class="content-box-right">
                    <p class="content-p1">沃航精神</p>
                    <p class="content-p2">诚信自励，自主创新，协作进取，专业高效，精益求精</p>
                </div>
            </div>
            </div>
<!--
            <div class="box3">
                <p class="product-title1">我们的团队</p>
                <p class="product-title2">Our team</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-box">
                                <div class="slide-top">
                                    <img src="<?php AssetsUrl ();?>/imgs/wphone/touxiang.png" alt="<?php WebsiteImportantWord ();?>"/>
                                </div>
                                <p class="slide-p1">技术</p>
                                <div class="slide-bottom">
                                    <p>5年Android、ios应用开发经验。</p>
                                    <p>现任Android、ios技术经理曾担任高级研发工程师</p>
                                </div>
                            </div>
                            <div class="slide-box">
                                <div class="slide-top">
                                    <img src="<?php AssetsUrl ();?>/imgs/wphone/touxiang.png" alt="<?php WebsiteImportantWord ();?>"/>
                                </div>
                                <p class="slide-p1">技术</p>
                                <div class="slide-bottom">
                                    <p>5年Android、ios应用开发经验。</p>
                                    <p>现任Android、ios技术经理曾担任高级研发工程师</p>
                                </div>
                            </div>
                            <div class="slide-box">
                                <div class="slide-top">
                                    <img src="<?php AssetsUrl ();?>/imgs/wphone/touxiang.png" alt="<?php WebsiteImportantWord ();?>"/>
                                </div>
                                <p class="slide-p1">技术</p>
                                <div class="slide-bottom">
                                    <p>5年Android、ios应用开发经验。</p>
                                    <p>现任Android、ios技术经理曾担任高级研发工程师</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
-->
            <div class="box3">
                <p class="product-title1">我们的客户</p>
                <p class="product-title2">Our customers</p>
                <img src="<?php AssetsUrl ();?>/imgs/wphone/about6.png" style="width: 100%;" alt="<?php WebsiteImportantWord ();?>"/>
            </div>
<?php require("view/mobile/footer.php");?>
        </div>
    </div>
<!-- off-canvas backdrop -->
    <div class="mui-off-canvas-backdrop"></div>
    </div>
</div>
<script>
mui('.mui-scroll-wrapper').on('tap', 'a', function() {
    location.href = this.getAttribute('href')
});
mui.init({
    swipeBack: false,
});
var offCanvasWrapper = mui('#offCanvasWrapper');
var offCanvasInner = offCanvasWrapper[0].querySelector('.mui-inner-wrap');
var offCanvasSide = document.getElementById("offCanvasSide");
var moveTogether = false;
var classList = offCanvasWrapper[0].classList;
mui('.mui-input-group').on('change', 'input', function() {
    if (this.checked) {
        offCanvasSide.classList.remove('mui-transitioning');
        offCanvasSide.setAttribute('style', '');
        classList.remove('mui-slide-in');
        classList.remove('mui-scalable');
        switch (this.value) {
            case 'main-move':
                if (moveTogether) {
                    offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
                    moveTogether = false;
                }
                break;
            case 'main-move-scalable':
                if (moveTogether) {
                    offCanvasWrapper[0].insertBefore(offCanvasSide, offCanvasWrapper[0].firstElementChild);
                }
                classList.add('mui-scalable');
                break;
            case 'menu-move':
                classList.add('mui-slide-in');
                break;
            case 'all-move':
                moveTogether = true;
                offCanvasInner.insertBefore(offCanvasSide, offCanvasInner.firstElementChild);
                break;
        }
        offCanvasWrapper.offCanvas().refresh();
    }
});
mui('#offCanvasSideScroll').scroll();
mui('#offCanvasContentScroll').scroll();
if (mui.os.plus && mui.os.ios) {
    offCanvasWrapper[0].addEventListener('shown', function(e) {
        plus.webview.currentWebview().setStyle({
            'popGesture': 'none',
        });
    });
    offCanvasWrapper[0].addEventListener('hidden', function(e) {
        plus.webview.currentWebview().setStyle({
            'popGesture': 'close',
        });
    });
}
window.onload = function() {
    var height = jQuery(".news-change ul li").height();
    jQuery(".news-change").css({
        height: jQuery(".news-box-top").length * (height + 35)
    });
    jQuery(".take-more a").on("tap", function() {
        jQuery(this).addClass("take-more1-active");
    });
    jQuery(".take-more a").on("release", function() {
        jQuery(this).removeClass("take-more1-active");
    });
}
</script>
</body>
</html>
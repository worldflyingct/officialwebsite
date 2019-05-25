<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_人才合作</title>
    <script src="js/mui.min.js"></script>
    <script src="js/jquery-3.1.0.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/flexible.js"></script>
    <script src="js/flexible_css.js"></script>
    <script src="js/jweixin-1.2.0.js"></script>
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <link href="css/mui.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/flexible.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
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
            olor: #000;
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
                <img src="imgs/wphone/logo.png" alt="武汉app开发"/>
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div id="offCanvasContentScroll" class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll">
                <img src="imgs/wphone/cooperation-bg.png" style="width: 100%;" alt="武汉app开发">
                <div class="box3">
                    <p class="product-title1">职位招聘</p>
                    <p class="product-title2">Position recruitment</p>
                    <div class="about-content-box">
                        <div class="content-box-left">
                            <img src="imgs/wphone/cooperation1.png" alt="武汉app开发"/>
                        </div>
                        <div class="content-box-right" style="margin-left: 4%;">
                            <p class="cooperation-p1"><img src="imgs/wphone/cooperation4.png" style="width:30px;" alt="武汉app开发"/><span>&lt;IDEA&gt;</span></p>
                            <p class="cooperation-p2">
                                <span>和聪明人一起做事</span>
                                <span>崇尚创新、快速的互联网文化 正在寻找富有创意和想法的你</span>
                            </p>
                        </div>
                    </div>
                    <div class="about-content-box" style="padding-left: 5%;">
                        <div class="content-box-right" style="margin-left: 0;margin-right: 4%;">
                            <p class="cooperation-p1"><img src="imgs/wphone/cooperation4.png" style="width:30px;" alt="武汉app开发"/><span>&lt;JOIN&gt;</span></p>
                            <p class="cooperation-p2">
                                <span>做激动人心产品</span>
                                <span>让未来的你喜欢现在的自己 加入我们，在行动中收获梦想</span>
                            </p>
                        </div>
                        <div class="content-box-left">
                            <img src="imgs/wphone/cooperation2.png" alt="武汉app开发"/>
                        </div>
                    </div>
                </div>
                <div class="box3">
                    <img src="imgs/wphone/cooperation3.png" style="width: 90%;margin: 0 5%;" alt="武汉app开发">
                    <p style="margin-top: 10px;font-size: 16px;color: #444;">工作大有不同</p>
                    <p style="font-size: 13px;">创业的氛围让每个人都为做出美好和事情而努力</p>
                </div>
                <div class="box3">
                    <p class="product-title1">人才招聘</p>
                    <p class="product-title2">Talent recruitment</p>
                    <div class="recruit-box">
                        <p class="recruit-name">UI设计师</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、配合产品经理完成客户要求的app或网页美工图。</p><p>2、配合公司完成公司推广页面与相关图片。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">PHP工程师</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>4000-6000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、根据客户需求完成程序开发</p><p>2、根据客户需求完成功能修改</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">WEB前端工程师</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>4000-6000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、配合美工完成网页切图。</p><p>2、配合运营完成网站设计。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">JAVA工程师</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>5000-8000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、根据客户需求完成程序开发。</p><p>2、根据公司需求完成程序设计。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">服务器运维人员</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、需要会linux下搭建php环境，java环境以及配置nginx。</p><p>2、根据用户提出的需求修改服务器相关配置。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">产品经理</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、听取并理解客户的需求。</p><p>2、根据客户的需求分析客户的痛点。</p><p>3、根据客户的痛点给予客户更专业的建议。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
                    </div>
                    <div class="recruit-box">
                        <p class="recruit-name">推广专员</p>
                        <div class="recruit-div">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="recruit-div">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="recruit-need">岗位内容</p>
                        <div class="recruit-need-detail"><p>1、根据公司实际情况做出合理的推广方案。</p><p>2、操作百度竞价，百度知道推广。</p><p>3、根据推广方案与前端工程师配合优化公司官网。</p></div>
                        <p class="recruit-button"><button>MORE+</button></p>
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
function sendrequest() {
    var checkres = $("#sendrequest_form")[0].reportValidity();
    if (checkres == false) {
        return;
    }
    $.ajax({
        method: 'post',
        url: 'sendrequest.html',
        data: {
            clientname: $("#clientname").val(),
            clientemail: $("#clientemail").val(),
            clientphone: $("#clientphone").val(),
            clientsuggest: $("#suggest").val(),
        },
        success: function(data) {
            if (data == "success") {
                mui.alert('需求提交成功，请等待客服主动与您联系。', '恭喜');
                $("#clientname").val("");
                $("#clientemail").val("");
                $("#clientphone").val("");
                $("#suggest").val("");
            } else {
                console.log(data);
                mui.alert('需求提交失败，请直接通过电话与客服联系。', '警告');
            }
        },
    });
}
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
mui('.mui-input-group').on('change', 'input',
function() {
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
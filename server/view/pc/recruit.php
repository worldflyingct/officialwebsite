<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewpoint" content="width=device-width"/>
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="css/winit.css">
    <link rel="stylesheet" href="css/wwreset.css">
    <link rel="stylesheet" href="css/wwhome.css">
    <link rel="stylesheet" href="css/wwswiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/xinnav.css">
    <link rel="stylesheet" href="css/xindedibu.css">
    <title><?php WebsiteTitle ();?>_人才合作</title>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<style>
    /* html, body {
        position: relative;
        height: 100%;
        overflow-x: hidden;
    } */
    body {
        background: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    #swiper1 img {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        margin-bottom: 0 !important;
    }
</style>
<body>
<?php require("header.php");?>
<img src="imgs/pic/personnel-bg.png" style="width: 100%;margin-top: 67px" alt="<?php WebsiteImportantWord ();?>">
<h1 class="business-title1">职位招聘</h1>
<h1 class="business-title2">Position recruitment</h1>
<div class="idea-box">
    <div class="idea-box-img">
        <img src="imgs/pic/personnel1.png" alt="<?php WebsiteImportantWord ();?>">
    </div>
    <div class="idea-box-content">
        <p class="idea-box-head"><img src="imgs/pic/personnel2.png" alt="<?php WebsiteImportantWord ();?>"><span>&lt;IDEA&gt;</span></p>
        <div class="idea-div">
            <p>和聪明的人一起共事</p>
            <p>崇尚创新、快速的互联网文化 正在寻找富有创意和想法的你</p>
        </div>
    </div>
</div>
<div class="idea-box">
    <div style="width: 14%;display: inline-block;">
        <img src="imgs/pic/personnel3.png" alt="<?php WebsiteImportantWord ();?>">
    </div>
    <div class="idea-box-content" style="width: 45%;">
        <p class="idea-box-head"><img src="imgs/pic/personnel2.png" alt="<?php WebsiteImportantWord ();?>"><span>&lt;JOIN&gt;</span></p>
        <div class="idea-div">
            <p>做激动人心的产品</p>
            <p>让未来的你喜欢现在的自己  加入我们，在行动中收获梦想</p>
        </div>
    </div>
    <div class="idea-box-img">
        <img src="imgs/pic/personnel4.png" alt="<?php WebsiteImportantWord ();?>">
    </div>
</div>
<div class="work-diff">
    <img style="width: 100%" src="imgs/pic/personnel5.png" alt="<?php WebsiteImportantWord ();?>">
    <div class="work-diff-left">
        <p>工作大有不同</p>
        <br />
        <p>创业的氛围让每个人都积极创新 为做出美好和事情而努力</p>
    </div>
    <div class="work-diff-right">
        <div></div>
        <img src="imgs/pic/personnel6.png" alt="<?php WebsiteImportantWord ();?>"><span>&lt;EFORTS&gt;</span>
    </div>
</div>
<div class="recruit">
    <div class="recruit-box">
        <p class="recruit-title">人才招聘</p>
        <p class="recruit-title2">Recruitment</p>
        <div class="swiper-container">
            <div class="swiper-wrapper" style="padding-bottom: 50px;">
                <div class="swiper-slide">
                    <div class="detail-box">
                        <p class="detail-title">UI设计师</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、配合产品经理完成客户要求的app或网页美工图。</p><p>2、配合公司完成公司推广页面与相关图片。</p></div>
                    </div>
                    <div class="detail-box">
                        <p class="detail-title">PHP工程师</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>4000-6000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、根据客户需求完成程序开发</p><p>2、根据客户需求完成功能修改</p></div>
                    </div>
                    <div class="detail-box">
                        <p class="detail-title">WEB前端工程师</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>4000-6000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、配合美工完成网页切图。</p><p>2、配合运营完成网站设计。</p></div>
                    </div>
                    <div class="detail-box">
                        <p class="detail-title">JAVA工程师</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>5000-8000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、根据客户需求完成程序开发。</p><p>2、根据公司需求完成程序设计。</p></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="detail-box">
                        <p class="detail-title">服务器运维人员</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、需要会linux下搭建php环境，java环境以及配置nginx。</p><p>2、根据用户提出的需求修改服务器相关配置。</p></div>
                    </div>
                    <div class="detail-box">
                        <p class="detail-title">产品经理</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、听取并理解客户的需求。</p><p>2、根据客户的需求分析客户的痛点。</p><p>3、根据客户的痛点给予客户更专业的建议。</p></div>
                    </div>
                    <div class="detail-box">
                        <p class="detail-title">推广专员</p>
                        <div class="detail-p1">
                            <p><span>薪资：</span><span>3000-5000</span></p>
                            <p><span>工作地点：</span><span>武汉</span></p>
                        </div>
                        <div class="detail-p1">
                            <p><span>学历要求：</span><span>不限</span></p>
                            <p><span>经验要求：</span><span>不限</span></p>
                        </div>
                        <p class="detail-p3">工作内容：</p>
                        <div style="height: 150px;"><p>1、根据公司实际情况做出合理的推广方案。</p><p>2、操作百度竞价，百度知道推广。</p><p>3、根据推广方案与前端工程师配合优化公司官网。</p></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<?php require("footer.php");?>
<script type="text/javascript">
 var map = new BMap.Map("container");
    map.centerAndZoom(new BMap.Point(114.422636,30.506178),18);
    map.enableScrollWheelZoom(true);
    // 用经纬度设置地图中心点114.415836, 30.500568
    function theLocation(){
            map.clearOverlays();
            var new_point = new BMap.Point(114.422636,30.506178);
            var marker = new BMap.Marker(new_point);  // 创建标注
            map.addOverlay(marker);              // 将标注添加到地图中
            map.panTo(new_point);
    }
    theLocation();

     var i=0;
    $(".contact").mouseover(function(){
        if(i==0){
            $(this).animate({right:"0px"});
            i=1;
            console.log(i)
        }

    })
    $("#close").click(function(){
        $(".contact").animate({right:"-180px"},function(){
            i=0;
        })
    })
    $("#chuxian").click(function(){
        $(".contact").animate({right:"0px"},function(){
            i=1;
        })
    })
    $('#weixin').mouseover(function(){
        $('.erweima').css("display","block");
    })
     $('#weixin').mouseout(function(){
        $('.erweima').css("display","none");
     })
    var mySwiper = new Swiper('.swiper-container',{
        pagination : '.swiper-pagination',
    });
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewpoint" content="width=device-width"/>
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="css/winit.css">
    <link rel="stylesheet" href="css/sreset.css">
    <link rel="stylesheet" href="css/spower.css">
    <link rel="stylesheet" type="text/css" href="css/xinnav.css">
    <title><?php WebsiteTitle ();?>_电力物联网系统</title>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("view/pc/header.php");?>
<div class="contain" >
    <div class="section1">
        <div class="power-back" >
            <img src="imgs/sback3.png" >
            <div class="back">
                <img src="imgs/sback4.png" >
                <div class="text">
                    <p class="p1">电力物联网系统</p>
                    <p class="p2">Power Internet of Things System </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="power-one">
            <div class="picture1">
                <img src="imgs/spicture1.png" alt="">
            </div>
            <div class="text1">
                <h2>方案简介</h2>
                <p>
                    该系统是基于互联网的数据远程实时传输以及数据远程控制功能开发的。通过网络监控各个设备结点，以分散监控，集中管理的方式有效解决用电单位电气线路老旧、小微企业无专业电工、肉眼无法直观系统即时排查电气隐患、隐蔽工程隐患检查难等难题。<br/>
                    智慧安全用电是从源头上预防电气火灾的有效措施，本系统可以引导大众牢固树立安全意识、全面落实安全安全用电的基本措施。
                </p>
            </div>
        </div>
    </div>
    <div class="section3">
        <div class="power-two" style="background: url('imgs/spicture2.png');background-size:100% 100%;top:10%;">
            <img src="imgs/sback5.png" >
            <ul class="clearfix">
                <li style="border-top: none;border-left:none">
                    <p>先进性</p>
                    系统开发的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思想，最终使系统在技术上达到国内领先水平
                </li>
                <li  style="border-top: none;">
                    <p>良好的开放性</p>
                    系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性
                </li>
                <li style="border-top: none;border-right:none">
                    <p>高可靠性</p>
                    系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比较明确的接口规范。应用系统要经过反复测试，有较强的容错能力，确保可靠运行；
                </li>
                <li style="border-bottom:none;border-left:none;">
                    <p>实用性</p>
                    软件开发依据无人健身房软件需求具体内容，必须达到相关功能、性能等需求
                </li>
                <li style="border-bottom: none">
                    <p>易维护性</p>
                    系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性
                </li>
                <li style="border-bottom: none;border-right:none">
                    <p>灵活的扩展性</p>
                    软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。
                </li>
            </ul>
        </div>
    </div>
     <div class="section4">
        <div class="power-three">
           <div class="title">
                <h2>功能明细</h2>
           </div>
            <div class="power1">
                <div class="icon1">
                    <img src="imgs/power/sanjiao.png" alt="">
                    <h4>1.权限管理</h4>
                    <p>本权限管理系统是考虑到管理人员不可能只有一个人，有的人是管理这个片区，另一部分人是管理其他片区。有的人负责管理用户缴费，有的人负责用户报修以及设备的维护。</p>
                </div>
                 <div class="pic1">
                    <img src="imgs/power/quanx.png" >
                </div>
                <div class="icon2">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>2.用户管理系统</h4>
                        <p>这里的用户指的并不是管理员，而是终端用户，如果针对的是智能电表，那这个终端用户指的就将是每一户的居民，每个用户可以绑定多个智能电表，但是每个智能电表智能绑定
                                一个用户。</p>
                </div>
                <div class="pic2">
                    <img src="imgs/power/shuju2.png" alt="">
                </div>
                <div class="icon3">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>3.设备远程控制系统</h4>
                        <p>设备远程控制系统基于推送技术实现，利用目前先进的类似 mqtt 技术，利用目前已有的以太网为基础。</p>
                </div>
                <div class="icon4">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>4.新闻资讯系统</h4>
                        <p>设备远程控制系统基于推送技术实现，利用目前先进的类似 mqtt 技术，利用目前已有的以太网为基础。</p>
                </div>
                <div class="icon5">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>5.App 系统</h4>
                        <p>App 系统主要有两个端，一个是维修师傅的那一端，用于在故障现场查看设备参数的。另一个是用户端，用于支付费用，接收报警信息等。</p>
                </div>
                <div class="icon6">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>6. 数据存储</h4>
                        <p>设备本身有存储功能，用于保证当无网络的情况下运行数据能被记录下来。同时服务端也需要有数据记录，方便统计以及查阅。</p>
                </div>
                <div class="icon7">
                        <img src="imgs/power/sanjiao.png" alt="">
                        <h4>7. 数据分析</h4>
                        <p>设备本身有存储功能，用于保证当无网络的情况下运行数据能被记录下来。同时服务端也需要有数据记录，方便统计以及查阅。</p>
                </div>
                <div class="pic3">
                    <img src="imgs/power/shuju.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php require("view/pc/footer.php");?>
<script>
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(114.422636, 30.506178), 18);
map.enableScrollWheelZoom(true);
// 用经纬度设置地图中心点114.415836, 30.500568
function theLocation() {
    map.clearOverlays();
    var new_point = new BMap.Point(114.422636, 30.506178);
    var marker = new BMap.Marker(new_point); // 创建标注
    map.addOverlay(marker); // 将标注添加到地图中
    map.panTo(new_point);
}
theLocation();
window.onload = function() {
    $("#swiper2").children().children(".swiper-slide").css("height", document.body.clientHeight + 30);
}
var i = 0;
$(".contact").mouseover(function() {
    if (i == 0) {
        $(this).animate({
            right: "0px"
        });
        i = 1;
    }
})
$("#close").click(function() {
    $(".contact").animate({
        right: "-180px"
    }, function() {
        i = 0;
    })
})
$("#chuxian").click(function() {
    $(".contact").animate({
        right: "0px"
    }, function() {
        i = 1;
    })
})
$('#weixin').mouseover(function() {
    $('.erweima').css("display", "block");
})
$('#weixin').mouseout(function() {
    $('.erweima').css("display", "none");
})
</script>
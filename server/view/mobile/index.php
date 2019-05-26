<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_首页</title>
    <script src="<?php AssetsUrl ();?>/js/jquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_index.css">
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
                <div class="box1">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg1.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box2">
                <div>
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg2.png" alt="<?php WebsiteImportantWord ();?>">
                        <div class="tiao">
                            <a style="top: 25%;left: 0;" href="<?php SiteUrl();?>/mobilegym.html"></a>
                            <a style="top: 25%;left: 40%;" href="<?php SiteUrl();?>/mobileagriculture.html"></a>
                            <a style="top: 25%;left: 80%;" href="<?php SiteUrl();?>/mobilepowerful.html"></a>
                            <a style="top: 70%;left: 0;" href="<?php SiteUrl();?>/mobilecybercafe.html"></a>
                            <a style="top: 70%;left: 40%;" href="<?php SiteUrl();?>/mobilecommunity.html"></a>
                            <a style="top: 70%;left: 80%;" href="<?php SiteUrl();?>/mobilecinema.html"></a>
                        </div>
                    </div>
                </div>
                <div class="box3">
                    <h3>案例</h3>
                    <p>case</p>
                    <div id="bbtn" class="clearfix">
                        <div class="bg" style="margin-right: 5%;margin-left: 2.5%;">
                            <i style="background:linear-gradient(to bottom, #0ebfcf , #0890e4);"></i>
                            <p>自助服务终端</p>
                        </div>
                        <div>
                            <i style="background:linear-gradient(to bottom, #21a1fc , #3767fe);"></i>
                            <p>MINI共享KTV</p>
                        </div>
                        <div style="margin-right: 5%;margin-left: 2.5%;">
                            <i style="background:linear-gradient(to bottom, #734ee9 , #4e3fed);"></i>
                            <p>智能喷码设备</p>
                        </div>
                        <div >
                            <i style="background:linear-gradient(to bottom, #05adb5 , #0282c6);"></i>
                            <p>电力能效分析系统</p>
                        </div>
                    </div>
                    <ul id="contt">
                        <li class="active11">
                            <div>
                                <p>本项目是一个政务类软硬件相结合的系统集成类项目，不动产自助打印终端是以现有窗口登记业务流程为依据，进行简化和优化，将业务流程电子化、自助化办理的创新成果，不仅能大大提升办事效率，减少排队；同时，该设备可实现社区化部署，市民任何时间均可就近自助办理，是落实“简政放权”的切实工作体现，节省时间、人员成本。
                                    产品的主要功能有：电子表单、指纹采集、高清摄像、电子签名、身份验证、资料扫描、人脸识别。这是国内首台不动产预受理系统，做到真正的全自助办理、无纸化绿色政务，身份证的的调档做到高效率，高准确性，并具有防破坏报警，社区化部署等特点。</p>
                            </div>
                            <img src="<?php AssetsUrl ();?>/imgs/phone/case1.png" alt="<?php WebsiteImportantWord ();?>">
                        </li>
                        <li>
                            <div>
                                <p>MiNi共享KTV是一个由软件和硬件组成的综合性集成项目，包含了手机端的微信小程序，云端服务器，以及线下主机服务器，电子显示屏，等一系列连接控制。用户通过手机微信小程序来完成用户身份验证、充值押金、扫码开门、对唱歌机的控制、完成支付并查看自己的消费信息，以及在手机端的社交。</p>
                            </div>
                            <img src="<?php AssetsUrl ();?>/imgs/ktv.jpg" alt="<?php WebsiteImportantWord ();?>">
                        </li>
                        <li>
                            <div>
                                <p>本项目产品是一款工业级应用设备，在各种物体表面上喷印上图案文字和数码，是集机电一体化的高科技产品。产品广泛应用于食品工业、化妆品工业、医药工业、汽车等零件加工行业、电线电缆行业、铝塑管行业、烟酒行业以及其它领域。可用于喷印生产日期、批号、条型码以及商标图案、防伪标记和中文字样，是贯彻卫生法和促进包装现代化强有力的设备。</p>
                            </div>
                            <!-- <img src="" alt="<?php WebsiteImportantWord ();?>"> -->
                        </li>
                        <li>
                            <div>
                                <p>本系统是一个电力行业的能效管理系统，电力能效管理系统软件借助了计算机、通信设备、计量保护装置等，为系统的实时数据采集、开关状态检测及远程控制提供了基础平台。该电力监控系统可以为企业提供“监控一体化”的整体解决方案，主要包括实时历史数据库AcrSpace、工业自动化组态软件AcrControl、电力自动化软件AcrNetPower、“软”控制策略软件AcrStrategy、通信网关服务器AcrFieldComm、OPC产品、Web门户工具等，可以广泛地应用于企业信息化、DCS系统、PLC系统、SCADA系统。</p>
                            </div>
                            <!-- <img src="" alt="<?php WebsiteImportantWord ();?>"> -->
                        </li>
                    </ul>
                </div>
                <div class="box4">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg3.jpg" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box5">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg4.jpg" alt="<?php WebsiteImportantWord ();?>">
                </div>
<?php require ("view/mobile/footer.php");?>
            </div>
        </div>
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
$('.tiao').on('tap','a',function(){
    location.href = $(this).href();
})
$('#bbtn').on("tap","div",function(){
    $('#bbtn>div').removeClass('bg');
    $('#contt>li').removeClass('active11');
    var i = $(this).index();
    $('#contt>li').eq(i).addClass('active11');
    $(this).addClass('bg');
})
</script>
</body>
</html>
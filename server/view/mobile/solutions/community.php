<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_智慧小区</title>
    <script type="text/javascript" src="<?php AssetsUrl ();?>/js/jquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_xiaoqu.css">
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
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg6.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box2">
                    <div class="top">
                        <div>
                            <i></i>
                            <h3>方案简介</h3>
                        </div>
                        <p>利用传感网、互联网、移动互联网及4G网络和相关终端，将建筑小区以物业管理系统为基础，把小区内各类公共信息应用系统和业主家居应用系统等系统进行集成，将传感器获取的信息通过云计算技术反馈到用户的手机、PC和电视屏上，实现在任何时间、任何地点、以任何主体、向任何对象、传播任何信息的应用系统。</p>
                    </div>
                    <div class="bottom">
                            <div>
                                <i></i>
                                <h3>功能介绍</h3>
                            </div>
                            <img src="<?php AssetsUrl ();?>/imgs/phone/bg7.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                </div>
                <div class="box3">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg8.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box4">
                    <div>
                        <div>
                            <i></i>
                            <h3>设备介绍</h3>
                        </div>
                        <ul class="clearfix">
                            <li class="active12">
                                <h4>RfId读卡器</h4>
                                <p>选用网源的UHF915M</p>
                                <img src="<?php AssetsUrl ();?>/imgs/phone/bg19.png">
                            </li>
                            <li class="fenkai">
                                <h4>LoRa网关</h4>
                                <p>唯传Lora网关路由器工作频率470MHz~510MHz传输距离稳定15公里，最高22公里</p>
                            </li>
                            <li>
                                <h4>485信号转LoRa传感器</h4>
                                <img src="<?php AssetsUrl ();?>/imgs/phone/bg20.png">
                            </li>
                            <li>
                                <h4>防盗按钮</h4>
                                <p>基于lora模块开发，报警距离5到10公里，内置长寿命锂电池，如果触发报警，耗电量为0，电池寿命为10年，也就说如果永不触发报警，10年不需要换电池。</p>
                            </li>
                            <li class="fenkai">
                                <h4>水位报警系统</h4>
                                <p>使用浮球报警器，内置长寿命锂电池，如果触发报警，耗电量为0，电池寿命为10年，也就说如果永不触发报警，10年不需要换电池。</p>
                            </li>
                            <li>
                                <h4>水表监测系统</h4>
                                <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
                            </li>
                            <li>
                                <h4>lora烟雾传感器</h4>
                                <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
                            </li>
                            <li class="fenkai">
                                <h4>Lora可燃气体传感器</h4>
                                <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
                            </li>
                            <li>
                                <h4>消防栓水压系统</h4>
                                <p>采用Lora模块的消防栓水压系统，采用大容量磷酸铁锂理电池，可保证半个月到1个月左右无需更换电池。</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box5">
                    <div>
                        <div>
                            <i></i>
                            <h3>设计原则</h3>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <h4>先进性</h4>
                                <p>系统开发的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思想，最终使系统在技术上达到国内领先水平</p>
                            </li>
                            <li class="fenkai">
                                <h4>良好的开放性</h4>
                                <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性</p>
                            </li>
                            <li>
                                <h4>高可靠性</h4>
                                <p>系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比较明确的接口规范。应用系统要经过反复测试，有较强的容错能力，确保可靠运行；</p>
                            </li>
                            <li>
                                <h4>实用性</h4>
                                <p>软件开发依据无人健身房软件需求具体内容，必须达到相关功能、性能等需求</p>
                            </li>
                            <li class="fenkai">
                                <h4>易维护性</h4>
                                <p>系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性</p>
                            </li>
                            <li>
                                <h4>灵活的扩展性</h4>
                                <p>软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。</p>
                            </li>
                        </ul>
                    </div>
                </div>
<?php require("view/mobile/footer.php");?>
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
$('.box4>div>ul').on("tap","li",function(){
    $('.box4>div>ul>.active12').removeClass("active12");
    $(this).addClass("active12");
})
</script>
</body>
</html>
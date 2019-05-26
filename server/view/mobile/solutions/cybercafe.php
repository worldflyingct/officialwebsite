<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_无人网吧</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/bar.css">
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
                    <div class="pic1">
                        <div class="back1">
                            <h1>无人网吧解决方案</h1>
                        </div>
                    </div>
                </div>
                <div class="box2">
                    <div class="mudi">
                    <h2>实施目的</h2>
                        <ul>
                            <li>
                                <i></i>
                                <p>1、通过技术方式让相关硬件互联，降低人力成本，提高管理效率的，以达到提高净利润的目的。</p>
                            </li>
                            <li>
                                <i></i>
                                <p>2、利用App与店内设施互通，实现连接互联网，让客户产生一种方便与高端的感受，吸引更多优质客户来店内消费。</p>
                            </li>
                            <li>
                                <i></i>
                                <p>3、安防系统接入，通过全自动的安防系统一体化管理，提高网吧的安防水平。</p>
                            </li>
                            <li>
                                <i></i>
                                <p>4、通过全自动的传感器设备，监控网吧的温湿度，并作出相应的处理。以提高整体健身房的舒适度</p>
                            </li>
                            <li>
                                <i></i>
                                <p>5、利用支付宝/微信支付，提高支付的灵活度，增加用户使用体验。</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box3">
                    <div class="pic2">
                        <div class="back2">
                            <h2>方案简介</h2>
                            <p>针对当前网吧行业的相关痛点，本方案结合当前先进的物联网技术，利用app开门，支付宝/微信收费的方式实现无人化，24小时营业的无人网吧。
                            方案的核心是物联网技术，将所有的健身房的所有软硬件系统通过云服务器连接起来。</p>
                            <ul>
                                <li style="border-top: none;border-left:none">
                                    <h4>1.用户认证</h4>
                                    <div  class="text">
                                        <p>
                                            网吧所有用户都需要下载一个App。每个用户拥有数据自己的数据资料，通过登录App实现身份认证。然后通过后台提取用户资料，了解用户的消费情况，权限信息等资料。
                                            所有相关的设备都需要添加控制模块，通过物联网技术，如，实现用户认证操作。然后确定是否开放对应设备。
                                        </p>
                                    </div>
                                </li>
                                <li style="border-top: none;">
                                    <h4>2.设备互联</h4>
                                    <div  class="text">
                                        <p>
                                            网吧采用中央管理服务器管理，通过内部局域网与设备互联，对健身房内部的所有智能硬件实现集中管理，这台服务器又与云服务器连接，实现用户可以远程控制当前机房的目的。
                                        </p>
                                    </div>
                                </li>
                                <li style="border-top: none;border-right:none">
                                    <h4>3.用户资料录入与资料获取</h4>
                                    <div  class="text">
                                        <p>
                                            客户端App连接远程服务器，通过远程服务器端获取当前用户的信息，实现App可以在任意地方访问的可以达到相同的效果。并且可以在后台实时看到用户信息与消费情况。
                                        </p>
                                    </div>
                                </li>
                                <li style="border-bottom:none;border-left:none;">
                                    <h4>4.室内环境的闭环调整</h4>
                                    <div class="text">
                                        <p>
                                            通过各种传感器，获取获取健身房温度，湿度，汗味等信息。然后根据相关的信息反馈，控制相应的设备，如温度太低，启动暖气。温度太高，启动冷气。湿度/汗味浓度太高，启动换气功能。室内光线太强，拉下窗帘。光线太弱，拉上窗帘。
                                        </p>
                                    </div>
                                </li>
                                <li style="border-bottom: none" class="pic3">
                                    <h4>5.整体框架</h4>
                                    <img src="<?php AssetsUrl ();?>/imgs/mobile/power.png" alt="<?php WebsiteImportantWord ();?>">
                                </li>
                                <li style="border-bottom: none;border-right:none">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box4">
                    <div class="table">
                        <h2>功能列表</h2>
                        <ul>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sc.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    查询附近无人网吧
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sz.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    查询网吧使用情况
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/syu.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    预约网吧
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sw.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    网吧自动上网
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sy.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    获取/使用网吧优惠券
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sj.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    上网记录
                                </p>
                            </li>
                            <li >
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sf.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    分享
                                </p>
                            </li>
                            <li>
                                <div class="circle">
                                    <div class="circle1">
                                        <img src="<?php AssetsUrl ();?>/imgs/mobile/sg.png" alt="<?php WebsiteImportantWord ();?>">
                                    </div>
                                </div>
                                <p>
                                    更多定制功能
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box5">
                    <div class="matter">
                        <div class="text4">
                            <h2>设计原则</h2>
                        </div>
                        <ul>
                            <li style="border-top: none;border-left:none">
                                <h4>先进性</h4>
                                <div class="text5">
                                    <p>
                                        系统开发的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思想，最终使系统在技术上达到国内领先水平
                                    </p>
                                </div>
                            </li>
                            <li style="border-top: none;">
                                <h4>良好的开放性</h4>
                                <div class="text5">
                                    <p>
                                        系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性
                                    </p>
                                </div>
                            </li>
                            <li style="border-top: none;border-right:none;">
                                <h4>高可靠性</h4>
                                <div class="text5">
                                    <p>
                                        系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比较明确的接口规范。应用系统要经过反复测试，有较强的容错能力，确保可靠运行；
                                    </p>
                                </div>
                            </li>
                            <li style="border-bottom:none;border-left:none;">
                                <h4>实用性</h4>
                                <div class="text5">
                                    <p>
                                        软件开发依据无人健身房软件需求具体内容，必须达到相关功能、性能等需求
                                    </p>
                                </div>
                            </li>
                            <li style="border-bottom: none">
                                <h4>易维护性</h4>
                                <div class="text5">
                                    <p>
                                        系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性
                                    </p>
                                </div>
                            </li>
                            <li style="border-bottom: none;border-right:none">
                                <h4>灵活的扩展性</h4>
                                <div class="text5">
                                    <p>
                                        软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。
                                    </p>
                                </div>
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
</script>
</body>
</html>
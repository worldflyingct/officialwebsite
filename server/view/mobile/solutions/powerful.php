<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_电力远程控制</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/power.css">
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
                            <h1>电力物联网系统</h1>
                        </div>
                    </div>
                </div>
                <div class="box2">
                    <div class="text1">
                        <h2>方案简介</h2>
                        <p>
                            该系统是基于互联网的数据远程实时传输以及数据远程控制功能开发的。
                            通过网络监控各个设备结点，以分散监控，集中管理的方式有效解决用电单位电气线路老旧、
                            小微企业无专业电工、肉眼无法直观系统即时排查电气隐患、隐蔽工程隐患检查难等难题。
                            智慧安全用电是从源头上预防电气火灾的有效措施，本系统可以引导大众牢固树立安全意识、
                            全面落实安全安全用电的基本措施。
                        </p>
                    </div>
                </div>
                <div class="box3">
                    <div class="pic2">
                        <div class="back2">
                            <ul  class="clearfix">
                                <li>
                                    <h4>先进性</h4>
                                    <div class="text1">
                                        <p>
                                            系统开发的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思想，最终使系统在技术上达到国内领先水平。
                                        </p>
                                    </div>
                                </li>
                                <li >
                                    <h4>良好的开放性</h4>
                                    <div class="text1">
                                        <p>
                                            系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性
                                        </p>
                                    </div>
                                </li>
                                <li >
                                    <h4>高可靠性</h4>
                                    <div class="text1">
                                        <p>
                                            系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比较明确的接口规范。应用系统要经过反复测试，有较强的容错能力，确保可靠运行；
                                        </p>
                                    </div>
                                </li>
                                <li >
                                    <h4>实用性</h4>
                                    <div class="text1">
                                        <p>
                                            软件开发依据无人健身房软件需求具体内容，必须达到相关功能、性能等需求
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <h4>易维护性</h4>
                                    <div class="text1">
                                        <p>
                                            系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <h4>灵活的扩展性</h4>
                                    <div class="text1">
                                        <p>
                                            软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box4">
                    <div class="powerful">
                        <h2>功能明细</h2>
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>1.权限管理系统</h4>
                            <p>本权限管理系统是考虑到管理人员不可能只有一个人，
                                有的人是管理这个片区，另一部分人是管理其他片区。
                                有的人负责管理用户缴费，有的人负责用户报修以及设备的维护。
                            </p>
                        </div>
                    </div>
                    <div class="powerful2">
                        <img src="<?php AssetsUrl ();?>/imgs/mobile/spic1.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                    <div class="powerful3">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>2.用户管理系统</h4>
                            <p>本这里的用户指的并不是管理员，而是终端用户，
                                如果针对的是智能电表，那这个终端用户指的就将是每一户的居民
                                ，每个用户可以绑定多个智能电表，但是每个智能电表智能绑定
                                一个用户。
                            </p>
                        </div>
                    </div>
                    <div class="powerful4">
                        <img src="<?php AssetsUrl ();?>/imgs/mobile/spic2.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                    <div class="powerful5">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>3.远程控制管理系统</h4>
                            <p>设备远程控制系统基于推送技术实现，
                                利用目前先进的类似 mqtt 技术，利用目前已有的以太网为基础。
                            </p>
                        </div>
                    </div>
                    <div class="powerful6">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>4.新闻资讯系统</h4>
                            <p>新闻资讯系统用于分发一些类似用电知识，用电新闻等的相关信息。
                            </p>
                        </div>
                    </div>
                    <div class="powerful7">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>5.App系统</h4>
                            <p>App 系统主要有两个端，一个是维修师傅的那一端，用于在故障现场查看设备参数的。
                                另一个是用户端，用于支付费用，接收报警信息等。
                            </p>
                        </div>
                    </div>
                    <div class="powerful8">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>6.数据存储</h4>
                            <p>设备本身有存储功能，用于保证当无网络的情况下运行数据能被记录下来。同时服务端也需要有数据记录，方便统计以及查阅。
                            </p>
                        </div>
                    </div>
                    <div class="powerful9">
                        <div class="p1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sanjiao.png" alt="<?php WebsiteImportantWord ();?>">
                            <h4>7.数据分析</h4>
                            <p>设备本身有存储功能，用于保证当无网络的情况下运行数据能被记录下来。同时服务端也需要有数据记录，方便统计以及查阅。
                            </p>
                        </div>
                    </div>
                    <div class="powerful10">
                        <img src="<?php AssetsUrl ();?>/imgs/mobile/spic3.png" alt="<?php WebsiteImportantWord ();?>">
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
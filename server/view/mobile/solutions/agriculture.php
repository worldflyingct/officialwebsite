<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_智慧农业</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_nongye.css">
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
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg9.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box2">
                    <div class="top">
                        <h3>方案简介</h3>
                        <p>智能农业温室大棚，可实时无线采集和传输温室大棚内空气中以及土壤的温度、湿度、光照、PH、CO2浓度等环境参数，通过PC电脑、移动手机和平板电脑以直观的图表和曲线的方式显示给用户，可根据种植作物的需求提供各种声光报警信息，并可以自定义规则控制洒水、农药以及温度。它主要由农业温室大棚、各种无线传感器、控制器及后台系统软件和用户端APP等组成。</p>
                    </div>
                    <div class="bottom">
                        <h3>功能介绍</h3>
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg10.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                </div>
                <div class="box3">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg11.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box4">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg12.png" alt="<?php WebsiteImportantWord ();?>">
                    <h3>用户端app以地图的方式对各个控制点进行控制以及查看各个传感器数据。地图可以自定义上传。</h3>
                    <ul>
                        <li>
                            <img src="<?php AssetsUrl ();?>/imgs/phone/wmap.png" alt="<?php WebsiteImportantWord ();?>">
                            <div>
                                <!-- <h4>1、查看实时环境数据</h4>
                                <p>可以实时查看棚内空气、土壤和水中的温度、湿度、二氧化碳浓度、光照、PH值等环境数据。也可以查询历史数据。便于对整体数据分析。</p>
                                <h4>2、大棚管理 </h4>
                                <p>可新增大棚，也可删除废弃大棚信息。</p>
                                <h4>3、地图显示 </h4>
                                <p>绿色代表设备正常，红色代表设备异常，灰色代表设备离线。</p> -->
                                <img src="<?php AssetsUrl ();?>/imgs/phone/bg21.png">
                            </div>
                        </li>
                        <li>
                            <img src="<?php AssetsUrl ();?>/imgs/phone/wgonglu.png" alt="<?php WebsiteImportantWord ();?>">
                            <div>
                                <!-- <h4>1、摄像机显示</h4>
                                <p>实时获取视频监控，随时查看棚内农作物情况，可以查询历史监控 </p> -->
                                <img src="<?php AssetsUrl ();?>/imgs/phone/bg22.png">
                            </div>
                        </li>
                        <li>
                            <img src="<?php AssetsUrl ();?>/imgs/phone/wwendu.png" alt="<?php WebsiteImportantWord ();?>">
                            <div>
                                <!-- <h4>1、记录显示 </h4>
                                <p>显示记录采用轮播的方式，旧记录会显示在下方，新记录会显示在上方。</p> -->
                                <img src="<?php AssetsUrl ();?>/imgs/phone/bg23.png">
                            </div>
                        </li>
                    </ul>
                    <div>
                        <i></i>
                        <p>更多功能请咨询商务经理</p>
                    </div>
                </div>
                <div class="box5">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg13.png" alt="<?php WebsiteImportantWord ();?>">
                    <div>
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg14.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                    <div>
                        <h3>1、权限管理 </h3>
                        <p>权限管理分为管理员管理、角色管理、管理员操作日志。可对管理员的权限进行编辑。记录管理员操作日志。</p>
                        <h3>2、App用户管理</h3>
                        <p>权限管理分为用户管理、用户组管理。可对用户进行分组以及权限管理。</p>
                        <h3>3、设备管理</h3>
                        <p>设备管理分为设备管理、设备分组管理、设备状态等等。</p>
                    </div>
                    <div>
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg15.png" alt="<?php WebsiteImportantWord ();?>">
                    </div>
                    <div>
                        <h3>1、规则管理 </h3>
                        <p>可对控制器规则进行管理。</p>
                        <h3>2、数据管理</h3>
                        <p>管理ph值、光照、温度、湿度、二氧化碳进行数据分析等等功能 </p>
                        <h3>3、控制器管理</h3>
                        <p>编辑可控制内容，设定控制规则等等对控制器进行管理</p>
                    </div>
                    <div>
                        <i></i>
                        <p>更多功能请咨询商务经理</p>
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
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_仓库管理</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_canku.css">
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
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg16.png">
                </div>
                <div class="box2">
                    <h3>系统简介</h3>
                    <p>Introduction</p>
                    <ul class="clearfix">
                        <li>
                            <h3>先进性</h3>
                            <p>系统的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思想，</p>
                        </li>
                        <li>
                            <h3>良好的开放性</h3>
                            <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性。</p>
                        </li>
                        <li>
                            <h3>高可靠性</h3>
                            <p>系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比</p>
                        </li>
                        <li>
                            <h3>实用性</h3>
                            <p>软件依据仓储管理的实际需求具体内容，必须达到相关功能、性能等需求；</p>
                        </li>
                        <li>
                            <h3>易维护性</h3>
                            <p>系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性。</p>
                        </li>
                        <li>
                            <h3>灵活的扩展性</h3>
                            <p>软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。</p>
                        </li>
                    </ul>
                </div>
                <div class="box3">
                    <img src="<?php AssetsUrl ();?>/imgs/phone/bg17.png">
                    <h3>功能说明</h3>
                    <div style="margin-top: 30px;">
                        <h4>1.物品批量导入功能</h4>
                        <p>当仓库有新的物品需要入仓库时，先将物品的名称，分组，对应的RFID标签信息等信息编辑成为一个表格文件，文件格式可以是xls或是xlsx。然后通过后台的管理员导入。<br>需要导出时，通过后台的管理员账号将物品当前信息导出成为xls或是xlsx，导出范围可以根据物品分组，或是进仓库时间等条件。</p>
                    </div>
                    <div>
                        <h4>2.物品统计功能（盘点功能）</h4>
                        <p>物品统计功能是对当前系统中已有物品的状态进行统计的功能，包括仓库内物品数量，种类统计。统计形式可以是表格，也可以是各种图表。本功能可以用于辅助库存的人工盘点，提高工作效率。</p>
                    </div>
                    <div>
                        <h4>3.物品出入管理功能</h4>
                        <p>在仓库的所有出入口，全部放置一个Rfid标签读卡器，当有Rfid标签从读卡器的可读取范围内读到标签信号，立刻发出信息给中央服务器，中央服务器通过数据库中当前Rfid标签所对应的物品是在仓库内还是在仓库外来判断该物品本次触发事件是出仓库还是入仓库，然后将本次事件记录到数据库中去。</p>
                    </div>
                    <div>
                        <h4>4.RFID管理</h4>
                        <p>本功能是基于RFID可以复用的基础添加的，RFID本来与仓库中的物品没有直接关系，物理上我们通过胶布等手段让RFID绑定到某个物品上，然后在系统中将那个物品设置为某个RFID。</p>
                    </div>
                    <div>
                        <h4>5.管理员管理</h4>
                        <p>当物品导入或是RFID新增时，可以选择批量导入。如果无法批量导入，需要人工一个一个的操作，就需要新建几个管理员，让他们各自分别导入物品或是RFID，因此本系统多管理员是必须的。</p>
                    </div>
                    <div>
                        <h4>6.权限管理</h4>
                        <p>权限管理不是针对某个单个管理员设置的，而是增对管理员分组设置的，分组下的下级管理员分组只能拥有小于或是登录当前分组的管理权限。</p>
                    </div>
                    <div>
                        <h4>7.物品快速查找功能</h4>
                        <p>配置手持的RFID读卡设备，首先在RFID手持终端中输入要寻找的物品，可以通过搜索功能实现或是通过直接输入的方式实现。将RFID读卡设备的精度设置高一点，这样可以判断是否在RFID手持终端所在前方10米范围内，如果不在，就去别的位置扫。当手持RFID读卡设备发出声音，就将精度调低，缩小寻找范围，就这样一点一点你的缩小识别区域，最终将物体找到。</p>
                    </div>
                    <div>
                        <img src="<?php AssetsUrl ();?>/imgs/phone/bg18.png">
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
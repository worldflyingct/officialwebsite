<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php WebsiteDescription ();?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?>_影院服务平台</title>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/phone_init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/movie.css">
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
                <div class="box">
                    <div class="pic1">
                        <a href="#">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/sback1.png" alt="<?php WebsiteImportantWord ();?>">
                        </a>
                        <div class="back1">
                            <a href="#">
                                <img src="<?php AssetsUrl ();?>/imgs/mobile/sback2.png" alt="<?php WebsiteImportantWord ();?>">
                            </a>
                            <div class="back2">
                                <a href="">
                                    <img src="<?php AssetsUrl ();?>/imgs/mobile/sback3.png" alt="<?php WebsiteImportantWord ();?>">
                                </a>
                                <p class="p1">影院服务平台方案</p>
                                <p>Theater service platform scheme</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box1">
                    <img src="<?php AssetsUrl ();?>/imgs/mobile/dog.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="box2">
                    <div class="text1">
                        <div class="text2">
                            <p></p>
                            <p>方案简介</p>
                        </div>
                        <p>
                            在我们日常生活中去电影院看电影已经成为我们最重要的日常活动之一，随着移动互联网时代飞速发展，用手机购票已经成为最主要的购票方式，据统计线上购票比例已达到80%以上，远远超过线下柜台购票，这表明互联网深入人们的生活，越来越多的传统购票方式将得到改变甚至是巅峰。此套方案将将整合所有影院管理功能，更加智能化的对影院进行管理。无纸化检票接入门禁系统，减少用户取票过程。更加环保，用户体验更佳。影院服务平台方案包含线上用户端小程序、APP与影院后台三个部分，线下无纸化检票系统。无纸化检票接入门禁系统，减少用户取票过程。更加环保，用户体验更佳。
                        </p>
                    </div>
                </div>
                <div class="box3">
                    <div class="pic2">
                        <div class="back">
                            <p class="circle"></p>
                            <p class="text1">功能明细</p>
                            <ul>
                                <li >
                                    <h4>(1)在线购票</h4>
                                    <p>
                                        使用场景：消费者在小程序内可直观电影放映场次以及已售出电影票情况，可直接在线选座。
                                        目的：减少消费者在柜台排队买票，使购票更快捷方便。
                                    </p>
                                </li>
                                <li>
                                    <h4>(2)商品服务</h4>
                                    <p>
                                        使用场景：消费者可以选择购买商品自取或者外卖送到座位号服务。
                                        目的：减少消费者在柜台排队购买商品以及在观影途中终止观影购买商品的情况。使消费者在观影过程中更便捷的购买商品。
                                    </p>
                                </li>
                                <li>
                                    <h4>(3)会员</h4>
                                    <p>
                                        使用场景：消费者在线上申请影院会员，以及了解会员情况。
                                        目的：不用在柜台办理复杂的会员手续，可自助快速办理会员，会有有更多的优惠权益。解决了影城会员招募难的问题。增强用户粘性。
                                    </p>
                                </li>
                                <li>
                                    <h4>(4)优惠券</h4>
                                    <p>
                                        使用场景：消费者通过参与影院活动获取优惠券，优惠券可抵扣电影票的金额。
                                        目的：增加与消费者互动，使消费者更优惠购买电影票，获取消费者好感，增强消费者粘性。
                                    </p>
                                </li>
                                <li>
                                    <h4>(5)社交</h4>
                                    <p>
                                        使用场景：消费者可以加入当场观看影片的群聊，与一起看当场电影的朋友一起讨论电影。也可以与好友进行聊天，还可以发布动态。
                                        目的：增加观众之间的互动，使此次观影更有趣更有深度。
                                    </p>
                                </li>
                                <li>
                                    <h4>(6)答题抽奖</h4>
                                    <p>
                                        使用场景：消费者通过参与答题可进行抽奖活动。
                                        目的：增加与消费者互动，获取消费者好感，增加消费者的留存率。代替影院线下依附于工作人员的活动，提高工作效率。
                                    </p>
                                </li>
                                <li>
                                    <h4>(7)商城</h4>
                                    <p>
                                        使用场景：快速了解电影周边或其他商品的售卖情况。在线购买电影周边或者其他商品 ，直接快递到家。
                                        目的：快速了解电影周边或其他商品的售卖情况。在家也可以购买电影周边等其他商品。增加电影周边以及其他商品的销售途径，提升业绩。
                                    </p>
                                </li>
                                <li>
                                    <h4>(8)影评</h4>
                                    <p>
                                        使用场景：消费者可对已观影的影片进行评价。
                                        目的：影院能更直接的了解消费者观影喜好，让电影更有深度。可以让有观影感受的观众找到共鸣。让消费者可以表达自己对电影的看法与评价
                                    </p>
                                </li>
                                <li>
                                    <h4>(9)个人中心</h4>
                                    <p>
                                        使用场景：消费者可以直观的查看个人订单、资金流水、观看记录等。
                                        目的：记录消费者的订单、资金流水、观看记录等可以让消费者随时了解自己的消费情况以及观影情况，便于查询。
                                    </p>
                                </li>
                                <li>
                                    <h4>(10)消息通知</h4>
                                    <p>
                                        使用场景：推送系统或者活动消息。
                                        目的：更直观的像消费者推荐影院活动，消费者更快速了解影院活动，提高消费者对于活动的参与率，吸引消费者到影院观影刺激消费者在商城的消费点。从而提高影院的业绩。
                                    </p>
                                </li>
                                <li>
                                    <h4>(11)呼叫服务</h4>
                                    <p>
                                        使用场景：消费者在观影途中可呼叫影院服务，如更换3D眼睛，影院空气差，影片放送有异常，影院有大声喧哗吵闹等不文明行为。
                                        目的：使影院的观影环境更有秩序更文明，营造舒服的观影环境。让消费者观影体验更好，提升消费者好感
                                    </p>
                                </li>
                                <li>
                                    <h4>(12)用户反馈</h4>
                                    <p>
                                        使用场景：消费者可提交对影院的意见。
                                        目的：影院可直接了解消费者的想法和意见，可更有针对性的提出解决方案，提升用户体验好感度。
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box4">
                    <div class="special">
                        <h2>方案特点</h2>
                        <ul id="bian" class="clearfix">
                            <li>
                                <h4>无纸化操作</h4>
                                <div class="text1">
                                    <p>
                                        用户无需排队取票，直接使用手机上的验证方式可以直接进入影厅。
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
                <div class="box5">
                    <div class="light clearfix">
                        <h2>方案亮点</h2>
                        <div class="pic1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/pic1.png" alt="<?php WebsiteImportantWord ();?>">
                            <p>1.无纸化验票</p>
                        </div>
                        <div class="pic1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/pic2.png" alt="<?php WebsiteImportantWord ();?>">
                            <p>2.在线选座</p>
                        </div>
                        <div class="pic1">
                            <img src="<?php AssetsUrl ();?>/imgs/mobile/pic3.png" alt="<?php WebsiteImportantWord ();?>">
                            <p>3.强大的数据分析能力</p>
                        </div>
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
mui('#bian').on('tap','li',function(){
    var li = document.querySelectorAll("#bian>li");
    for(var i=0 ;i<li.length;i++){
        li[i].setAttribute('class',"o");
    }
    this.setAttribute('class',"active11");
})
</script>
</body>
</html>
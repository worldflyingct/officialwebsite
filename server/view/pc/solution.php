<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/winit.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/sreset.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/sweb.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <title><?php WebsiteTitle ();?>_解决方案</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("header.php");?>
<div class="contain" >
    <div class="section1">
        <div class="shead">
            <img src="<?php AssetsUrl ();?>/imgs/web/sback.png" alt="<?php WebsiteImportantWord ();?>">
        </div>
    </div>
    <div class="section2">
        <h2>解决方案</h2>
        <div class="solve">
            <ul class="form">
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/gym.html">
                        <div class="pic1">
                            <img src="<?php AssetsUrl ();?>/imgs/web/save.png" alt="<?php WebsiteImportantWord ();?>">
                        </div>
                        <div class="save">
                            <h2>仓储管理系统</h2>
                            <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性。采用分散控制、集中管理的结构，使得系统可扩充性很强。</p>
                        </div>
                    </a>
                </li>
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/agriculture.html">
                        <div class="pic2">
                            <img src="<?php AssetsUrl ();?>/imgs/web/food.png">
                        </div>
                        <div class="save">
                            <h2>智慧农业</h2>
                            <p>主要由农业温室大棚、各种无线传感器、控制器及后台系统软件和用户端APP等组成。</p>
                        </div>
                    </a>
                </li>
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/powerful.html">
                        <div class="pic3">
                            <img src="<?php AssetsUrl ();?>/imgs/web/elec.png">
                        </div>
                        <div class="save">
                            <h2>电力远程控制</h2>
                            <p>是基于互联网的数据远程实时传输以及数据远程控制功能开发的。通过网络监控各个设备结点，以分散监控，集中管理的方式有效解决用电单位电气线路老旧、小微企业无专业电工、肉眼无法直观系统即时排查电气隐患、隐蔽工程隐患检查难等难题。</p>
                        </div>
                    </a>
                </li>
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/cinema.html">
                        <div class="pic4">
                            <img src="<?php AssetsUrl ();?>/imgs/web/movie.png">
                        </div>
                        <div class="save">
                            <h2>影院服务平台</h2>
                            <p>影院服务平台方案包含线上用户端小程序与影院后台两个部分，线下无纸化检票系统。</p>
                        </div>
                    </a>
                </li>
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/cybercafe.html">
                        <div class="pic5">
                            <img src="<?php AssetsUrl ();?>/imgs/web/pc.png">
                        </div>
                        <div class="save">
                            <h2>无人网吧</h2>
                            <p>利用app开门，支付宝/微信收费的方式实现无人化，24小时营业的无人网吧</p>
                        </div>
                    </a>
                </li>
                <li class="text1">
                    <a class="clearfix" href="<?php SiteUrl ();?>/community.html">
                        <div class="pic6">
                            <img src="<?php AssetsUrl ();?>/imgs/web/hotel.png">
                        </div>
                        <div class="save">
                            <h2>智慧小区</h2>
                            <p>利用传感网、互联网、移动互联网及4G网络和相关终端，将建筑小区以物业管理系统为基础，把小区内各类公共信息应用系统和业主家居应用系统等系统进行集成。</p>
                        </div>
                    </a>
                </li>
                <li class="text1" id="li1">
                    <a href="javascript:;">
                        <div class="pic7">
                            <img src="<?php AssetsUrl ();?>/imgs/web/more.png">
                        </div>
                        <div class="text2">
                            <p>了解更多解决方案请联系我们</p>
                        </div>
                    </a>
                </li>
                <li class="text1"></li>
            </ul>
        </div>
    </div>
</div>
<div class="lianxiwo">
    <div class="top3">
        联系我们
        <i id="chahca"></i>
    </div>
    <div class="bottom3">
        <div class="tu">
            <img src="<?php AssetsUrl ();?>/imgs/erweima.jpg" alt="<?php WebsiteImportantWord ();?>" style="vertical-align: middle;">
        </div>
        <div class="zi">
            <p>地点：<?php WebsiteAddress ();?></p>
            <p>QQ：<?php WebsiteQQ ();?></p>
            <p>电话：<?php WebsiteTelephone ();?></p>
            <p>手机：<?php WebsiteMobile ();?></p>
            <p>邮箱：<?php WebsiteEmail ();?></p>
        </div>
    </div>
</div>
<?php require("footer.php");?>
<script>
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(<?php BaiduMapX ();?>, <?php BaiduMapY ();?>), <?php BaiduMapZoom ();?>);
map.enableScrollWheelZoom(true);
// 用经纬度设置地图中心点114.415836, 30.500568
function theLocation() {
    map.clearOverlays();
    var new_point = new BMap.Point(<?php BaiduMapX ();?>, <?php BaiduMapY ();?>);
    var marker = new BMap.Marker(new_point); // 创建标注
    map.addOverlay(marker); // 将标注添加到地图中
    map.panTo(new_point);
}
theLocation();
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
$("#li1").click(function() {
    $(".lianxiwo").css("display", "block")
})
$("#chahca").click(function() {
    $(".lianxiwo").css("display", "none");
})
</script>
</body>
</html>
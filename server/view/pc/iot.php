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
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wbootstrap.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/IoT.css?afasd">
    <title><?php WebsiteTitle ();?>_物联网</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/wbootstrap.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("view/pc/header.php");?>
<div class="tower1">
    <img src="<?php AssetsUrl ();?>/imgs/IoT/hgkjhk.png" alt="<?php WebsiteImportantWord ();?>">
</div>
<div class="tower2">
    <h1>物联网模块</h1>
    <h3>全系产品内置协议栈，免开发</h3>
    <p><span></span></p>
    <ul>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/vnvcnvbn.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/bnvbnvb.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/bnvbnvn.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/vbncvbn.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/tuy.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/jjh.png" alt="<?php WebsiteImportantWord ();?>"></li>
    </ul>
</div>
<div class="tower3">
    <img src="<?php AssetsUrl ();?>/imgs/IoT/fdgdf.png" alt="<?php WebsiteImportantWord ();?>">
</div>
<div class="tower4">
    <h1>物联网解决方案</h1>
    <h3>从消费级到工业级物联网，满足你所需</h3>
    <p><span></span></p>
    <ul>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/fdhg.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/fghfg.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/dfhd.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/rtfh.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/vcnjvfbn.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/vngvg.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/cxgfhgf.png" alt="<?php WebsiteImportantWord ();?>"></li>
        <li><img src="<?php AssetsUrl ();?>/imgs/IoT/dfhdhd.png" alt="<?php WebsiteImportantWord ();?>"></li>
    </ul>
</div>
<div class="tower5">
    <img src="<?php AssetsUrl ();?>/imgs/IoT/dew.png" alt="<?php WebsiteImportantWord ();?>">
</div>
<div class="tower6">
    <p>
        <img src="<?php AssetsUrl ();?>/imgs/IoT/cvbcb.png" alt="<?php WebsiteImportantWord ();?>">
    </p>
</div>
<div class="tower7">
    <img src="<?php AssetsUrl ();?>/imgs/IoT/fbhfd.png" alt="<?php WebsiteImportantWord ();?>">
</div>
<div class="tower8">
    <p>业务案例</p>
    <ul>
        <li>
            <p>
                <a href="">在线预览</a>
                <a href="">查看更多</a>
            </p>
            <img src="<?php AssetsUrl ();?>/imgs/IoT/vdf.png" alt="<?php WebsiteImportantWord ();?>">
        </li>
        <li>
            <p>
                <a href="">在线预览</a>
                <a href="">查看更多</a>
            </p>
            <img src="<?php AssetsUrl ();?>/imgs/IoT/gvh.png" alt="<?php WebsiteImportantWord ();?>">
        </li>
        <li>
            <p>
                <a href="">在线预览</a>
                <a href="">查看更多</a>
            </p>
            <img src="<?php AssetsUrl ();?>/imgs/IoT/ww.png" alt="<?php WebsiteImportantWord ();?>">
        </li>
    </ul>
</div>
<div class="tower9">
    <p>服务机构</p>
    <div><img src="<?php AssetsUrl ();?>/imgs/IoT/gf.png" alt="<?php WebsiteImportantWord ();?>"></div>
</div>
<?php require("view/pc/footer.php");?>
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
    },
    function() {
        i = 0;
    })
})
$("#chuxian").click(function() {
    $(".contact").animate({
        right: "0px"
    },
    function() {
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
</body>
</html>
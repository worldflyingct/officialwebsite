<?php
$previousArticleId =GetPreviousArticleId ();
$nextArticleId = GetNextArticleId ();
?>
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
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wnews.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <title><?php ArticleTitle ();?>_<?php WebsiteImportantWord ();?>_沃航科技</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/wbootstrap.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("view/pc/header.php");?>
<div class="top-bg">
    <img src="<?php AssetsUrl ();?>/imgs/news/news-bg.png" alt="<?php WebsiteImportantWord ();?>">
</div>
<div class="textt">
    <h1><?php ArticleTitle ();?></h1>
    <h3><?php ArticlePublicTime ();?></h3>
    <div class="top-content">
        <?php ArticleContext ();?>
    </div>
    <div class="xia">
        <p>优秀解决方案推荐：<a href="<?php SiteUrl();?>/agriculture.html">智慧农业解决方案</a></p>
<?php if ($previousArticleId != 0) { ?>
        <p>上一篇：<a href="<?php SiteUrl();?>/article-id-<?php echo $previousArticleId;?>.html"><?php PreviousArticleTitle ();?></a></p>
<?php } ?>
<?php if ($nextArticleId != 0) { ?>
        <p>下一篇：<a href="<?php SiteUrl();?>/article-id-<?php echo $nextArticleId;?>.html"><?php NextArticleTitle ();?></a></p>
<?php } ?>
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

var i = 0;
$(".contact").mouseover(function() {
    if (i == 0) {
        $(this).animate({
            right: "0px"
        });
        i = 1;
        console.log(i)
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
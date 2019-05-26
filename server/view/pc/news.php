
<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$type = isset($_GET["type"]) ? $_GET["type"] : 0;
$totalpage = GetNewsTotalPage (5, $type);
$newsList = GetNewsList ($page, 5, $type);
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
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wnews-list.css?74">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <title><?php WebsiteTitle ();?>_新闻资讯</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/wbootstrap.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("header.php");?>
<div class="top-bg">
        <img src="<?php AssetsUrl ();?>/imgs/news/news-bg.png" alt="">
    </div>
    <div class="bottom-ul">
        <div class="new-top">
            <h3>新闻动态</h3>
            <h3>News information</h3>
            <ul class="clearfix">
                <li><a href="<?php SiteUrl ();?>/news.html"<?php if (!isset($_GET["type"])) echo " class=\"active-a\"";?>>ALL+</a></li>
                <li><a href="<?php SiteUrl ();?>/news-type-1.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 1) echo " class=\"active-a\"";?>>公司动态</a></li>
                <li><a href="<?php SiteUrl ();?>/news-type-2.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 2) echo " class=\"active-a\"";?>>媒体报道</a></li>
                <li><a href="<?php SiteUrl ();?>/news-type-3.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 3) echo " class=\"active-a\"";?>>行业资讯</a></li>
            </ul>
        </div>
        <div class="new-list">
            <ul class="clearfix">
<?php foreach ($newsList as $news) { ?>
                <li>
                    <div class="new-left">
                        <img src="<?php echo $news["thumbnail"];?>" alt="">
                    </div>
                    <div class="new-right">
                        <p><?php echo $news["title"];?></p>
                        <p><?php echo $news["publishtime"];?></p>
                        <p><?php echo $news["desc"];?></p>
                        <p><a href="<?php SiteUrl ();?>/article-id-<?php echo $news["ID"];?>.html">MORE</a></p>
                    </div>
                </li>
<?php } ?>
            </ul>
        </div>
        <div class="new-page">
            <ul class="clearfix">
<?php
if ($page > 1) {
?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$_GET["type"];?>.html" class="bianse">首页</a>
                </li>
<?php
}
if ($totalpage < 5) {
    for ($i = 1 ; $i <= $totalpage ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else if ($i == 1) { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else if ($totalpage - $page <= 2) {
    for ($i = $totalpage-5 ; $i <= $totalpage ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else if ($page <= 2) {
    for ($i = 1 ; $i <= 5 ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else if ($i == 1) { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else {
    for ($i = $page-2 ; $i <= $page+2 ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$_GET["type"];?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
}
if ($page != $totalpage) {
?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $totalpage;if ($type != 0) echo "-type-".$_GET["type"];?>.html" class="bianse">尾页</a>
                </li>
<?php
}
?>
            </ul>
        </div>
    </div>
<?php require("footer.php");?>
<script>
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(114.422636,30.506178),18);
map.enableScrollWheelZoom(true);
// 用经纬度设置地图中心点114.415836, 30.500568
function theLocation(){
    map.clearOverlays();
    var new_point = new BMap.Point(114.422636,30.506178);
    var marker = new BMap.Marker(new_point);  // 创建标注
    map.addOverlay(marker);              // 将标注添加到地图中
    map.panTo(new_point);
}
theLocation();
var i=0;
$(".contact").mouseover(function(){
    if(i==0){
        $(this).animate({right:"0px"});
        i=1;
    }
})
$("#close").click(function(){
    $(".contact").animate({right:"-180px"},function(){
        i=0;
    })
})
$("#chuxian").click(function(){
    $(".contact").animate({right:"0px"},function(){
        i=1;
    })
})
$('#weixin').mouseover(function(){
    $('.erweima').css("display","block");
})
$('#weixin').mouseout(function(){
    $('.erweima').css("display","none");
})
</script>
</body>
</html>
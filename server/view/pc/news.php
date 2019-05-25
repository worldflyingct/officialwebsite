<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
        <meta name="description" content="<?php WebsiteDescription ();?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="imgs/favicon.ico">
        <link rel="stylesheet" href="css/winit.css">
        <link rel="stylesheet" href="css/wbootstrap.css">
        <link rel="stylesheet" href="css/wnews-list.css?74">
        <link rel="stylesheet" type="text/css" href="css/xinnav.css">
        <title><?php WebsiteTitle ();?>_新闻资讯</title>
        <script src="js/wjquery-3.1.0.min.js"></script>
        <script src="js/wbootstrap.min.js"></script>
        <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
    </head>
<body>
<?php require("header.php");?>
<div class="top-bg">
        <img src="imgs/news/news-bg.png" alt="">
    </div>
    <div class="bottom-ul">
        <div class="new-top">
            <h3>新闻动态</h3>
            <h3>News information</h3>
            <ul class="clearfix">
                <li><a href="news.html"<?php if (!isset($_GET["type"])) echo " class=\"active-a\"";?>>ALL+</a></li>
                <li><a href="news-type-1.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 1) echo " class=\"active-a\"";?>>公司动态</a></li>
                <li><a href="news-type-2.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 2) echo " class=\"active-a\"";?>>媒体报道</a></li>
                <li><a href="news-type-3.html"<?php if (isset($_GET["type"]) && $_GET["type"] == 3) echo " class=\"active-a\"";?>>行业资讯</a></li>
            </ul>
        </div>
        <div class="new-list">
            <ul class="clearfix">
<?php foreach (GetNewsList() as $article) { ?>
                <li>
                    <div class="new-left">
                        <img src="{$article.thumbnail}" alt="">
                    </div>
                    <div class="new-right">
                        <p><?php echo $article.articletitle;?></p>
                        <p><?php echo $article.pagedescription;?></p>
                        <p><?php echo $article.description;?></p>
                        <p><a href="article-id-<?php echo $article.ID;?>.html">MORE</a></p>
                    </div>
                </li>
<?php } ?>
            </ul>
        </div>
        <div class="new-page">
            <ul class="clearfix">
<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
if ($page > 1) {
?>
                <li>
                    <a href="news<?php if (isset($_GET["type"])) echo "-type-".$_GET["type"];?>.html" class="bianse">首页</a>
                </li>
<?php
}
$newsPagings = GetNewsPagings();
foreach ($newsPagings as $newsPaging) {
    if ($page == $newsPaging) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $newsPaging;?></a>
                </li>
<?php } else { ?>
                <li>
                    <a href="news-<?php if (isset($_GET["type"])) echo "-type-".$_GET["type"];if ($newsPaging != 1) echo "-page-".$newsPaging;?>.html"><?php echo $newsPaging;?></a>
                </li>
<?php
    }
}
if ($page < GetNewsTotalPage ()) {
?>
                <li>
                    <a href="news-<?php if (isset($_GET["type"])) echo "-type-".$_GET["type"]."-page-".GetNewsTotalPage ();?>.html" class="bianse">尾页</a>
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
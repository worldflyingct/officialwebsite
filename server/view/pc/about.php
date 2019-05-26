<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>"/>
    <meta name="description" content="<?php WebsiteDescription ();?>"/>
    <meta name="viewpoint" content="width=device-width"/>
    <link rel="shortcut icon" href="<?php AssetsUrl ();?>/imgs/favicon.ico">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/winit.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wwreset.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wwhome.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wwswiper.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/xindedibu.css">
    <title><?php WebsiteTitle ();?>_关于我们</title>
    <script src="<?php AssetsUrl ();?>/js/jquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/swiper.jquery.min.js"></script>
    <script src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<style>
    body {
        background: #fff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    #swiper1 img {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        margin-bottom: 0 !important;
    }
</style>
<body>
<?php require("header.php");?>
<img src="<?php AssetsUrl ();?>/imgs/pic/us-bg.png" style="width: 100%;margin-top: 67px" alt="<?php WebsiteImportantWord ();?>">
<div class="us-box">
    <div class="who">
        <div class="who-head">
            <h1>我们是谁</h1>
            <h3>Who we are?</h3>
        </div>
        <div class="who-content">
            <div class="who-content-left">
                <img src="<?php AssetsUrl ();?>/imgs/pic/who.png" alt="<?php WebsiteImportantWord ();?>">
            </div>
            <div class="who-content-right">
                <p class="who-title">懂您所需，做您所想</p>
                <br />
                <p class="who-p1">沃航（武汉）科技股份有限公司是一家充满活力，极具创意，逐梦的年轻化团队，主要从事软件外包,技术解决方案的互联网科技公司，以精湛的技术、丰富的经验、优质的服务来为客户提供互联网一站式解决方案，公司成立于2016年7月11日，总部位于由雷军，李儒雄等人扶持创办的创业特区光谷SBI创业街。</p>
                <br />
                <p class="who-p2">客户都是各行各业的，例如教育、金融、社交网络、旅游、电力、商城、物流等，他们在众多家的软件外包公司当中抉择，为什么最终选择我们？必然是感受到了我们的诚意以及专业性，不论从与客户洽谈还是到后期服务，我们始终秉承“科技服务”理念，推动数字化，信息化进程，提供专业化的解决方案。根据客户需求，根据客户需求给出更为合理、专业、贴合实际、易被大众接受的解决方案。</p>
            </div>
        </div>
    </div>
    <div class="our-ideas">
        <ul class="ideas-left">
            <li style="padding-top: 50px;height: 150px;">
                <p class="ideas-title">我们的理念</p>
                <p class="ideas-title2">Our ideas</p>
                <div class="ideas-dot">
                    <span>01</span>
                    <i></i>
                </div>
            </li>
            <li>
                <div class="ideas-dot">
                    <span>02</span>
                    <i></i>
                </div>
            </li>
            <li>
                <div class="ideas-dot">
                    <span>03</span>
                    <i></i>
                </div>
            </li>
            <li>
                <div class="ideas-dot">
                    <span>04</span>
                    <i></i>
                </div>
            </li>
            <li>
                <div class="ideas-dot">
                    <span>05</span>
                    <i></i>
                </div>
            </li>
        </ul>
        <ul class="ideas-right">
            <li>
                <div class="ideas-right-img">
                    <img src="<?php AssetsUrl ();?>/imgs/pic/idea1.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="ideas-right-box">
                    <p class="ideas-right-title">沃航特点</p>
                    <br />
                    <p class="ideas-right-content">知识是点，技术是面，我们面面俱到。沃航科技持续秉承“科技服务”的理念，推动数字化，信息化进程，提供专业的解决方案。</p>
                </div>
            </li>
            <li>
                <div class="ideas-right-img">
                    <img src="<?php AssetsUrl ();?>/imgs/pic/idea2.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="ideas-right-box">
                    <p class="ideas-right-title">沃航文化</p>
                    <br />
                    <p class="ideas-right-content">用最专业的技术，最良好的态度服务客户，用质量铸就品牌。</p>
                </div>
            </li>
            <li>
                <div class="ideas-right-img">
                    <img src="<?php AssetsUrl ();?>/imgs/pic/idea3.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="ideas-right-box">
                    <p class="ideas-right-title">沃航使命</p>
                    <br />
                    <p class="ideas-right-content">用技术推进发展，用专业改变世界。</p>
                </div>
            </li>
            <li>
                <div class="ideas-right-img">
                    <img src="<?php AssetsUrl ();?>/imgs/pic/idea4.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="ideas-right-box">
                    <p class="ideas-right-title">沃航愿景</p>
                    <br />
                    <p class="ideas-right-content">成为世界一流的技术解决方案服务提供商。</p>
                </div>
            </li>
            <li>
                <div class="ideas-right-img">
                    <img src="<?php AssetsUrl ();?>/imgs/pic/idea5.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div class="ideas-right-box">
                    <p class="ideas-right-title">沃航精神</p>
                    <br />
                    <p class="ideas-right-content">诚信自励，自主创新，协作进取，专业高效，精益求精。</p>
                </div>
            </li>
        </ul>
    </div>
<?php if (0) { ?>
    <div class="our-team">
        <h1>我们的团队</h1>
        <h3>Our team</h3>
        <div class="swiper-container" id="team-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="team-div">
                        <div class="head-img"><img src="<?php AssetsUrl ();?>/imgs/pic/touxiang.png" alt="<?php WebsiteImportantWord ();?>"></div>
                        <div class="team-box">
                            <p class="member-name">技术</p>
                            <p class="member-skill">5年Android、 ios应用开发经验。</p>
                            <p class="member-skill">现任Android/ios	技术经理曾担任高级研发工程师。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
<?php } ?>
    <div class="our-partner">
        <h1>我们的合作伙伴</h1>
        <h3>Our partners</h3>
        <img src="<?php AssetsUrl ();?>/imgs/pic/partners.png" style="width: 100%" alt="<?php WebsiteImportantWord ();?>">
    </div>
</div>
<?php require("footer.php");?>
<script type="text/javascript">
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
var our_team = new Swiper('#team-swiper',{
    pagination : '.swiper-pagination',
    slidesPerView : 4,
    slidesPerGroup : 4,
    autoplay : 10000,
});
</script>
</body>
</html>
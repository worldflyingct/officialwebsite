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
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/windex.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <title><?php WebsiteTitle ();?>_首页</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/wbootstrap.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body style="min-width: 1020px;">
<?php require("header.php");?>
<div class="main">
    <div class="elevator1">
        <img style="width:100%;" src="<?php AssetsUrl ();?>/imgs/wbg2.png" alt="<?php WebsiteImportantWord ();?>">
    </div>
    <div class="elevator2">
        <div class="bg">
            <i></i>
            <div class="content">
                <i></i>
                <p style="margin-top:84px;">我们的解决方案</p>
                <p>Our solution</p>
                <div class="clearfix">
                    <ul class="one">
                        <li>
                            <a href="<?php SiteUrl ();?>/gym.html">
                                <div></div>
                                <h3>仓储管理系统</h3>
                                <i></i>
                                <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性。采用分散控制、集中管理的结构，使得系统可扩充性很强。</p>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div></div>
                                <h3>标准化管理开发流程</h3>
                            </a>
                        </li>
                    </ul>
                    <ul class="tow">
                        <li>
                            <a href="<?php SiteUrl ();?>/agriculture.html">
                                <div></div>
                                <h3>智慧农业</h3>
                                <i></i>
                                <p>主要由农业温室大棚、各种无线传感器、控制器及后台系统软件和用户端APP等组成。</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php SiteUrl ();?>/community.html">
                                <div></div>
                                <p>利用传感网、互联网、移动互联网及4G网络和相关终端，将建筑小区以物业管理系统为基础，把小区内各类公共信息应用系统和业主家居应用系统等系统进行集成</p>
                                <i></i>
                                <h3>智慧小区</h3>
                            </a>
                        </li>
                    </ul>
                    <ul class="three">
                        <li class="you" style="height: 190px;">
                            <a href="<?php SiteUrl ();?>/powerful.html">
                                <div></div>
                                <h3>电力远程控制</h3>
                                <p>是基于互联网的数据远程实时传输以及数据远程控制功能开发的。通过网络监控各个设备结点，以分散监控，集中管理的方式有效解决用电单位电气线路老旧、小微企业无专业电工、肉眼无法直观系统即时排查电气隐患、隐蔽工程隐患检查难等难题。</p>
                                <i></i>
                            </a>
                        </li>
                        <li class="center">
                            <a href="javascript:;">
                                <div></div>
                                <h3>根据客户需求量身制定解决方案</h3>
                            </a>
                        </li>
                        <li class="you">
                            <a href="<?php SiteUrl ();?>/cybercafe.html">
                                <div></div>
                                <h3>无人网吧</h3>
                                <p>利用app开门，支付宝/微信收费的方式实现无人化，24小时营业的无人网吧。</p>
                                <i></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="four">
                        <li>
                            <a href="<?php SiteUrl ();?>/cinema.html">
                                <div></div>
                                <h3>影院服务平台</h3>
                                <i></i>
                                <p>影院服务平台方案包含线上用户端小程序与影院后台两个部分，线下无纸化检票系统。</p>
                            </a>
                        </li>
                        <li id="li1">
                            <a href="#">
                                <div></div>
                                <h3>获取更多解决方案请联系我们</h3>
                                <i></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="elevator3">
        <i></i>
        <div class="dheader">
            <i></i>
            <p>部分方案</p>
            <p>segmentation scheme</p>
        </div>
        <div class="dbody">
            <div class="btns">
                <ul>
                    <li class="active"><a href="#one" data-toggle="tab">自助服务终端</a></li>
                    <li><a href="#two" data-toggle="tab">MiNi共享KTV</a></li>
                    <li><a href="#three" data-toggle="tab">智能喷码设备</a></li>
                    <li><a href="#four" data-toggle="tab">电力能效分析系统</a></li>
                    <li><a href="#five" data-toggle="tab">教育云平台</a></li>
                    <li><a href="#six" data-toggle="tab">校园O2O</a></li>
                </ul>
            </div>
            <div class="contents tab-content" id="myTabContent">
                <div id="one" class="tab-pane fade in active">
                    <p>本项目是一个政务类软硬件相结合的系统集成类项目，不动产自助打印终端是以现有窗口登记业务流程为依据，进行简化和优化，将业务流程电子化、自助化办理的创新成果，不仅能大大提升办事效率，减少排队；同时，该设备可实现社区化部署，市民任何时间均可就近自助办理，是落实“简政放权”的切实工作体现，节省时间、人员成本。<br/>
                        产品的主要功能有：电子表单、指纹采集、高清摄像、电子签名、身份验证、资料扫描、人脸识别。
                        这是国内首台不动产预受理系统，做到真正的全自助办理、无纸化绿色政务，身份证的的调档做到高效率，高准确性，并具有防破坏报警，社区化部署等特点。</p>
                    <img src="<?php AssetsUrl ();?>/imgs/wserver.png" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div id="two" class="tab-pane fade ">
                    <p>MiNi共享KTV是一个由软件和硬件组成的综合性集成项目，包含了手机端的微信小程序，云端服务器，以及线下主机服务器，电子显示屏，等一系列连接控制。用户通过手机微信小程序来完成用户身份验证、充值押金、扫码开门、对唱歌机的控制、完成支付并查看自己的消费信息，以及在手机端的社交。</p>
                    <img src="<?php AssetsUrl ();?>/imgs/ktv.jpg" alt="<?php WebsiteImportantWord ();?>">
                </div>
                <div id="three" class="tab-pane fade ">
                    <p>本项目产品是一款工业级应用设备，在各种物体表面上喷印上图案文字和数码，是集机电一体化的高科技产品。产品广泛应用于食品工业、化妆品工业、医药工业、汽车等零件加工行业、电线电缆行业、铝塑管行业、烟酒行业以及其它领域。可用于喷印生产日期、批号、条型码以及商标图案、防伪标记和中文字样，是贯彻卫生法和促进包装现代化强有力的设备。</p>
                </div>
                <div id="four" class="tab-pane fade ">
                    <p>本系统是一个电力行业的能效管理系统，电力能效管理系统软件借助了计算机、通信设备、计量保护装置等，为系统的实时数据采集、开关状态检测及远程控制提供了基础平台。该电力监控系统可以为企业提供“监控一体化”的整体解决方案，主要包括实时历史数据库AcrSpace、工业自动化组态软件AcrControl、电力自动化软件AcrNetPower、“软”控制策略软件AcrStrategy、通信网关服务器AcrFieldComm、OPC产品、Web门户工具等，可以广泛地应用于企业信息化、DCS系统、PLC系统、SCADA系统。</p>
                </div>
                <div id="five" class="tab-pane fade ">
                    <p>为学校用户提供教育信息化所需的网络空间、资源获取与共享平台服务及教学、科研、管理等应用的云服务。为学校用户提供教育信息化所需的网络空间、资源获取与共享平台
                    </p>
                </div>
                <div id="six" class="tab-pane fade ">
                    <p>校园o2o平台是一个新兴的电子商务平台，主要是为了广大学生群体建立一个实用性，广泛性，快捷性的消费平台。就大学生的消费的状况，市场份额相当巨大，消费潜力也是非常可观，这样的市场为该平台的发展提供了广大的发展前景。<br>校园o2o特点：与其他消费平台相比，该平台用户更为固定主要以学生为主，自身公司形式开展，更具有可靠性。消费手段和消费产品多元化，团队成员更贴近校园群体。以消费群体为主体，更加得到消费者的认可。</p>
                </div>
            </div>
        </div>
    </div>
    <div class="elevator4">
        <div class="bg">
            <i></i>
            <div class="content">
                <div class="service-top">
                    <i></i>
                    <p>我们的优势</p>
                    <p>Our strengths</p>
                </div>
                <div class="service-bottom">
                    <div class="strength-left">
                        <ul class="left-ul">
                            <li>
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength1.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>一支优秀的团队</p>
                                    <p>团队年轻，极富激情，超强凝聚力和创新意识。</p>
                                </div>
                            </li>
                            <li>
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength2.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>扎实的技术</p>
                                    <p>国内领先的Web端和移动端软件开发技术，熟练目前各类主流技术框架。</p>
                                </div>
                            </li>
                            <li>
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength3.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>个性化设计</p>
                                    <p>打破陈规，个性化的管理在定制的手机APP软件得以实现，满足不同类型的用户。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="strength-center">
                        <p class="center-icon">
                            <img src="<?php AssetsUrl ();?>/imgs/mafan/strength7.png" alt="<?php WebsiteImportantWord ();?>">
                        </p>
                        <p class="center-title">标准化的管理开发流程</p>
                        <p class="center-content">从商务洽谈、需求分析到项目交付乃至售后服务的全流程，均采取先进的科学管理模式，并对客户可见，放心、可靠。</p>
                    </div>
                    <div class="strength-right">
                        <ul class="left-ul">
                            <li style="border-right: 1px solid #3e3e3e;border-left: none">
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength4.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>用户需求的精准把控</p>
                                    <p>丰富的互联网产品策划和设计经验，让产品需求更贴近用户。</p>
                                </div>
                            </li>
                            <li style="border-right: 1px solid #3e3e3e;border-left: none">
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength5.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>行业前瞻和洞悉</p>
                                    <p>深度了解各类外包模式和现状，不断优化自身模式，与时俱进，更好地服务客户。</p>
                                </div>
                            </li>
                            <li style="border-right: 1px solid #3e3e3e;border-left: none">
                                <div class="strength-profile-left">
                                    <img src="<?php AssetsUrl ();?>/imgs/mafan/strength6.png" alt="<?php WebsiteImportantWord ();?>">
                                </div>
                                <div class="strength-profile-right">
                                    <p>完善的售后跟踪服务</p>
                                    <p>从产品上线到死亡的全周期，全方位掌控产品一手信息，随时提供配套的支持和服务，</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elevator5">
        <i></i>
        <div class="dheader">
            <i></i>
            <p>项目流程</p>
            <p>segmentation scheme</p>
        </div>
        <div class="dbody">
            <img src="<?php AssetsUrl ();?>/imgs/welevator5.png" alt="<?php WebsiteImportantWord ();?>">
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
            <img src="<?php AssetsUrl ();?>/imgs/erweima.jpg" alt="<?php WebsiteImportantWord ();?>">
        </div>
        <div class="zi">
            <p>地址：<?php WebsiteAddress ();?></p>
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
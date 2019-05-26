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
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wxiaoqu.css">
    <link rel="stylesheet" type="text/css" href="<?php AssetsUrl ();?>/css/xinnav.css">
    <title><?php WebsiteTitle ();?>_智慧小区</title>
    <script src="<?php AssetsUrl ();?>/js/wjquery-3.1.0.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/wbootstrap.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>
<body>
<?php require("view/pc/header.php");?>
<div class="elevator1">
    <div class="bg">
        <div>
            <h2>智慧小区解决方案</h2>
            <p>Theater service platform scheme</p>
            <i></i>
        </div>
    </div>
</div>
<div class="elevator2">
    <i></i>
    <div>
        <div class="top">
            <i></i>
            <h3>方案简介</h3>
            <p>利用传感网、互联网、移动互联网及4G网络和相关终端，将建筑小区以物业管理系统为基础，把小区内各类公共信息应用系统和业主家居应用系统等系统进行集成，将传感器获取的信息通过云计算技术反馈到用户的手机、PC和电视屏上，实现在任何时间、任何地点、以任何主体、向任何对象、传播任何信息的应用系统。</p>
        </div>
        <div class="bottom">
            <i></i>
            <h3>功能介绍</h3>
            <ul class="clearfix">
                <li>
                    <div><i></i></div>
                    <h5>物业服务</h5>
                    <p>在线报修，维修记录查询，社区公告，便民电话，投书建议等功能  </p>
                </li>
                <li>
                    <div><i></i></div>
                    <h5>安防服务</h5>
                    <p>视频监控、一卡通身份识别制度、楼宇对讲、进出口管理等功能</p>
                </li>
                <li>
                    <div><i></i></div>
                    <h5>水位报警系统</h5>
                    <p>小区防洪水位监测</p>
                </li>
                <li>
                    <div><i></i></div>
                    <h5>查询与缴费</h5>
                    <p>查询或缴纳水费、电费、煤气费。物业费等等</p>
                </li>
                <li>
                    <div><i></i></div>
                    <h5>更多功能</h5>
                    <p>更多功能请联系我们商务</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="elevator3 clearfix">
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg1.png" alt="武汉app开发">
        <div>
            <h3>在线报修</h3>
            <p>用户可以使用app在线申请维修</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg2.png" alt="武汉app开发">
        <div>
            <h3>社区公告</h3>
            <p>物业可在app上发布社区公告</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg3.png" alt="武汉app开发">
        <div>
            <h3>投诉建议</h3>
            <p>用户可在app上发送对物业的投诉与建议</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg4.png" alt="武汉app开发">
        <div>
            <h3>视频监控</h3>
            <p>物业可在后台随时查看小区内视频监控</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg5.png" alt="武汉app开发">
        <div>
            <h3>进出口管理</h3>
            <p>车辆进出口管理</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg6.png" alt="武汉app开发">
        <div>
            <h3>查询与缴费</h3>
            <p>查询水电煤气并可直接缴费</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg7.png" alt="武汉app开发">
        <div>
            <h3>水位报警器 拷贝</h3>
            <p>水位报警，有效的防洪 拷贝</p>
        </div>
    </div>
    <div>
        <img src="<?php AssetsUrl ();?>/imgs/wimg8.png" alt="武汉app开发">
        <div>
            <h3>更多功能</h3>
        </div>
    </div>
</div>
<div class="elevator4 clearfix">
    <div>
        <i></i>
        <h3>设备介绍</h3>
    </div>
    <ul>
        <li>
            <h5>RfId读卡器</h5>
            <p>选用网源的UHF915M</p>
            <img src="<?php AssetsUrl ();?>/imgs/wtu30.png" alt="武汉app开发">
        </li>
        <li>
            <h5>LoRa网关</h5>
            <p>唯传Lora网关路由器工作频率470MHz~510MHz传输距离稳定15公里，最高22公里</p>
        </li>
        <li>
            <h5>485信号转LoRa传感器</h5>
            <img style="margin-top: 50px;" src="<?php AssetsUrl ();?>/imgs/wtu31.png" alt="武汉app开发">
        </li>
        <li>
            <h5>防盗按钮</h5>
            <p>基于lora模块开发，报警距离5到10公里，内置长寿命锂电池，如果触发报警，耗电量为0，电池寿命为10年，也就说如果永不触发报警，10年不需要换电池。</p>
        </li>
        <li>
            <h5>水位报警系统</h5>
            <p>使用浮球报警器，内置长寿命锂电池，如果触发报警，耗电量为0，电池寿命为10年，也就说如果永不触发报警，10年不需要换电池。</p>
        </li>
        <li>
            <h5>水表监测系统</h5>
            <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
        </li>
        <li>
            <h5>lora烟雾传感器</h5>
            <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
        </li>
        <li>
            <h5>Lora可燃气体传感器</h5>
            <p>采用带有485总线的传感器，内置长寿命锂电池，水流平均5分组采集一次，平时设备进入低功耗模式，电池每次可以使用3年。</p>
        </li>
        <li>
            <h5>消防栓水压系统</h5>
            <p>采用Lora模块的消防栓水压系统，采用大容量磷酸铁锂理电池，可保证半个月到1个月左右无需更换电池。</p>
        </li>
    </ul>
</div>
<div class="elevator5">
    <div>
        <div>
            <i></i>
            <h3>业务逻辑图</h3>
        </div>
        <div class="img">
            <img src="<?php AssetsUrl ();?>/imgs/wsiwei.png" alt="武汉app开发">
        </div>
    </div>
</div>
<div class="elevator6">
    <h3>设计原则</h3>
    <ul class="clearfix">
        <li>
            <h5>先进性</h5>
            <p>系统开发的起点要高，采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上，采用先进的模块化程序设计和先进的设计思</p>
        </li>
        <li>
            <h5>良好的开放性</h5>
            <p>系统采用业界主流的硬件平台、操作系统平台、数据库平台以及标准的协议，保证系统的开放性</p>
        </li>
        <li>
            <h5>高可靠性</h5>
            <p>系统运行要建立在坚实的软件、硬件基础上，这是系统稳定可靠运行的前提。在此基础上，中心系统管理软件与操作系统及其他应用软件应有比</p>
        </li>
        <li>
            <h5>实用性</h5>
            <p>软件开发依据无人健身房软件需求具体内容，必须达到相关功能、性能等需求</p>
        </li>
        <li>
            <h5>易维护性</h5>
            <p>系统硬件可以很方便的实现远程管理及维护；系统软件均采用模块化的设计，并提供友好的人机接口，确保系统的易维护性</p>
        </li>
        <li>
            <h5>灵活的扩展性</h5>
            <p>软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强，有足够的扩展升级的余地。</p>
        </li>
    </ul>
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
window.onload = function() {
    $("#swiper2").children().children(".swiper-slide").css("height", document.body.clientHeight + 30);
}
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
</script>
</body>
</html>
<?php
require_once("functions.php");
$do = isset($_GET["do"]) ? $_GET["do"] : "index";

switch ($do) {
    // 页面展示部分的路由
    case "index":
        if (IsMobile()) {
            require("view/mobile/index.php");
        } else {
            require("view/pc/index.php");
        }
        break;
    case "iot":require("view/pc/iot.php");break;
    case "solution":require("view/pc/solution.php");break;
    case "news":require("view/pc/news.php");break;
    case "article":require("view/pc/article.php");break;
    case "about":require("view/pc/about.php");break;
    case "recruit":require("view/pc/recruit.php");break;
    case "gym":require("view/pc/solutions/gym.php");break;
    case "agriculture":require("view/pc/solutions/agriculture.php");break;
    case "powerful":require("view/pc/solutions/powerful.php");break;
    case "cinema":require("view/pc/solutions/cinema.php");break;
    case "community":require("view/pc/solutions/community.php");break;
    case "cybercafe":require("view/pc/solutions/cybercafe.php");break;
    case "mobileiot":require("view/mobile/iot.php");break;
    case "mobilesolution":require("view/mobile/solution.php");break;
    case "mobilenews":require("view/mobile/news.php");break;
    case "mobilearticle":require("view/mobile/article.php");break;
    case "mobileabout":require("view/mobile/about.php");break;
    case "mobilerecruit":require("view/mobile/recruit.php");break;
    case "mobilegym":require("view/mobile/solutions/gym.php");break;
    case "mobileagriculture":require("view/mobile/solutions/agriculture.php");break;
    case "mobilepowerful":require("view/mobile/solutions/powerful.php");break;
    case "mobilecinema":require("view/mobile/solutions/cinema.php");break;
    case "mobilecommunity":require("view/mobile/solutions/community.php");break;
    case "mobilecybercafe":require("view/mobile/solutions/cybercafe.php");break;
    case "apieditarticle": require("api/editarticle.php");break;
    case "apigetarticledesc": require("api/getarticledesc.php");break;
    case "apigetarticlelist": require("api/getarticlelist.php");break;
    case "apigetbasedata": require("api/getbasedata.php");break;
    case "apigetspiderlist": require("api/getspiderlist.php");break;
    case "apigetuserinfo": require("api/getuserinfo.php");break;
    case "apilogin": require("api/login.php");break;
    case "apipushbaidu": require("api/pushbaidu.php");break;
    case "apigetwxtoken":require("api/getwxtoken.php");break;
    case "apigetwxusermsg":require("api/getwxusermsg.php");break;
    case "apigetuselessimgs":require("api/getuselessimgs.php");break;
    case "apigetconfig":require("api/getconfig.php");break;
    case "apisetconfig":require("api/setconfig.php");break;
    case "sitemap":require("view/sitemap.php");break;
    default:
        echo "This is a 404 page.";
        break;
}

SpiderLog();
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
    case "about":require("view/pc/about.php");break;
    case "recruit":require("view/pc/recruit.php");break;
    case "gym":require("view/pc/solutions/gym.php");break;
    case "agriculture":require("view/pc/solutions/agriculture.php");break;
    case "powerful":require("view/pc/solutions/powerful.php");break;
    case "cinema":require("view/pc/solutions/cinema.php");break;
    case "community":require("view/pc/solutions/community.php");break;
    case "cybercafe":require("view/pc/solutions/cybercafe.php");break;
    case "mobileiot":require("view/mobile/iot.php");break;
    case "mobileabout":require("view/mobile/about.php");break;
}
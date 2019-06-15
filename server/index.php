<?php
require_once("functions.php");
$do = isset($_GET["do"]) ? $_GET["do"] : "index";

switch ($do) {
    // 页面展示部分的路由
    case "index":
        if (isset($_GET["news"])) {
            if ($_GET["news"] == "newslist") {
                header('HTTP/1.1 301 Moved Permanently');
                $url = "Location: https://www.worldflying.cn/mobilenews";
                if (isset($_GET["page"])) {
                    $url .= "-page-".$_GET["page"];
                }
                if (isset($_GET["type"]) && $_GET["type"] != 0) {
                    $url .= "-type-".$_GET["type"];
                }
                $url .= ".html";
                header($url);
            } else if ($_GET["news"] == "news") {
                header('HTTP/1.1 301 Moved Permanently');
                header("Location: https://www.worldflying.cn/mobilearticle-id-".$_GET["id"].".html");
            }
            exit;
        } else if (isset($_GET["solution"])) {
            header('HTTP/1.1 301 Moved Permanently');
            header("Location: https://www.worldflying.cn/solution.html");
            exit;
        }
        if (IsMobile()) {
            require("view/mobile/index.php");
        } else {
            require("view/pc/index.php");
        }
        break;
    case "iot":require("view/pc/iot.php");break;
    case "solution":require("view/pc/solution.php");break;
    case "news":
        if (isset($_GET["catid"])) {
            header('HTTP/1.1 301 Moved Permanently');
            $url = "Location: https://www.worldflying.cn/news-type-".$_GET["catid"];
            if (isset($_GET["page"])) {
                $url .= "-page-".$_GET["page"];
            }
            $url .= ".html";
            header($url);
            exit;
        }
        require("view/pc/news.php");
        break;
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
    case "api":require("api/".$_GET["act"].".php");break;
    case "sitemap":require("view/sitemap.php");break;
    // 为了兼容老网站所写的301跳转规则，如果是独立的新网站，不需要下面的部分。
    case "mobile":
        if (isset($_GET["mo"]) && $_GET["mo"] == "article") {
            header('HTTP/1.1 301 Moved Permanently');
            header("Location: https://www.worldflying.cn/mobilearticle-id-".$_GET["id"].".html");
            exit;
        } else if (isset($_GET["news"])) {
            if ($_GET["news"] == "newslist") {
                header('HTTP/1.1 301 Moved Permanently');
                $url = "Location: https://www.worldflying.cn/mobilenews";
                if (isset($_GET["page"])) {
                    $url .= "-page-".$_GET["page"];
                }
                if (isset($_GET["type"]) && $_GET["type"] != 0) {
                    $url .= "-type-".$_GET["type"];
                }
                $url .= ".html";
                header($url);
            } else if ($_GET["news"] == "news") {
                header('HTTP/1.1 301 Moved Permanently');
                header("Location: https://www.worldflying.cn/mobilearticle-id-".$_GET["id"].".html");
            }
            exit;
        }
    default:
        echo "This is a 404 page.";
        break;
}

SpiderLog();
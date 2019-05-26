<?php
require_once("config.php");
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"].";charset=utf8", $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true));
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function IsMobile() {
    $mobile_list = array('Android', 'iPhone', 'iPod', 'Mobile', 'Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'armv6l', 'armv5', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi',
        'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ', 'Profile/MIDP', 'Configuration/CLDC-', '160×160', '176×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link',
        'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka',
        'DoCoMo');
    $found_mobile = false;
    foreach($mobile_list as $v) {
        if(strstr($_SERVER['HTTP_USER_AGENT'], $v) != null) {
            $found_mobile = true;
            break;
        }
    }
    return $found_mobile;
}

function WebsiteMsg () {
    static $webmsg = null;
    if ($webmsg === null) {
        $webmsg = array();
        $arr = ExecuteSql ("SELECT `ckey`,`cvalue` FROM `wf_config`");
        $count = count ($arr);
        for ($i = 0 ; $i < $count ; $i++) {
            $webmsg[$arr[$i]["ckey"]] = $arr[$i]["cvalue"];
        }
    }
    return $webmsg;
}

function WebsiteTitle () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["title"];
}

function WebsiteKeyWords () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["keywords"];
}

function WebsiteDescription () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["description"];
}

function WebsiteAddress () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["address"];
}

function WebsiteQQ () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["QQ"];
}

function WebsiteTelephone () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["telephone"];
}

function WebsiteMobile () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["mobile"];
}

function WebsiteEmail () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["email"];
}

function WebsiteRecord () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["record"];
}

function WebsiteImportantWord () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["importantword"];
}

function GetNewsList ($page = 1, $size = 5, $type = 0) {
    static $newsList = null;
    if ($newsList === null) {
        $offset = $page-1;
        if ($type != 0) {
            $sql = "SELECT * FROM `wf_news` WHERE `status`=1 AND `articletype`=? AND `publishtime` < NOW() ORDER BY `publishtime` DESC LIMIT ".$offset.",".$size;
            $param = array ($type);
        } else {
            $sql = "SELECT * FROM `wf_news` WHERE `status`=1 AND `publishtime` < NOW() ORDER BY `publishtime` DESC LIMIT ".$offset.",".$size;
            $param = array ();
        }
        $res = ExecuteSql ($sql, $param);
        $newsList = $res;
    }
    return $newsList;
}

function GetNewsTotalPage ($size = 5, $type = 0) {
    static $totalpage = null;
    global $_GET;
    if ($totalpage === null) {
        if ($type != 0) {
            $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE `status`=1 AND `articletype`=? AND `publishtime` < NOW()";
            $param = array ($type);
        } else {
            $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE `status`=1 AND `publishtime` < NOW()";
            $param = array ();
        }
        $res = ExecuteSql ($sql, $param);
        $newscount = $res[0]["count"];
        $totalpage = ceil($newscount / $size);
    }
    return $totalpage;
}

function GetArticleInfo () {
    static $info = null;
    global $_GET;
    if ($info === null) {
        $res = ExecuteSql ("SELECT `title`,`desc`,`publishtime`,`context` FROM `wf_news` WHERE `Id`=? AND `publishtime` < NOW() AND `status`=1",
                array ($_GET["id"]));
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "title" => "文章不存在",
                "desc" => "文章不存在，请检查您的链接。",
                "publishtime" => "0000-00-00 00:00:00",
                "context" => "文章不存在，请检查您的链接。"
            );
        }
    }
    return $info;
}

function ArticleTitle () {
    $info = GetArticleInfo ();
    echo $info["title"];
}

function ArticleDesc () {
    $info = GetArticleInfo ();
    echo $info["desc"];
}

function ArticlePublicTime () {
    $info = GetArticleInfo ();
    echo $info["publishtime"];
}

function ArticleContext () {
    $info = GetArticleInfo ();
    echo $info["context"];
}

function GetPreviousArticleInfo () {
    static $info = null;
    global $_GET;
    if ($info === null) {
        if (isset($_GET["id"])) {
            $res = ExecuteSql ("SELECT `ID`,`title` FROM `wf_news` WHERE `Id`<? AND `publishtime` < NOW() AND `status`=1 ORDER BY `publishtime` DESC LIMIT 1",
                    array ($_GET["id"]));
            if (count($res) != 0) {
                $info = $res[0];
                return $info;
            }
        }
        $info = array (
            "ID" => 0,
            "title" => "文章不存在"
        );
    }
    return $info;
}

function GetPreviousArticleId () {
    $info = GetPreviousArticleInfo ();
    return $info["ID"];
}

function PreviousArticleTitle () {
    $info = GetPreviousArticleInfo ();
    echo $info["title"];
}

function GetNextArticleInfo () {
    static $info = null;
    global $_GET;
    if ($info === null) {
        if (isset($_GET["id"])) {
            $res = ExecuteSql ("SELECT `ID`,`title` FROM `wf_news` WHERE `Id`>? AND `publishtime` < NOW() AND `status`=1 ORDER BY `publishtime` ASC LIMIT 1",
                    array ($_GET["id"]));
            if (count($res) != 0) {
                $info = $res[0];
                return $info;
            }
        }
        $info = array (
            "ID" => 0,
            "title" => "文章不存在"
        );
    }
    return $info;
}

function GetNextArticleId () {
    $info = GetNextArticleInfo ();
    return $info["ID"];
}

function NextArticleTitle () {
    $info = GetNextArticleInfo ();
    echo $info["title"];
}
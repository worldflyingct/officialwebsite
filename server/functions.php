<?php
require_once("config.php");
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"], $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true));
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

function WebsiteTitle () {
    static $title = null;
    if ($title === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='title'");
        $title = $res[0]["cvalue"];
    }
    echo $title;
}

function WebsiteKeyWords () {
    static $keywords = null;
    if ($keywords === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='keywords'");
        $keywords = $res[0]["cvalue"];
    }
    echo $keywords;
}

function WebsiteDescription () {
    static $description = null;
    if ($description === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='description'");
        $description = $res[0]["cvalue"];
    }
    echo $description;
}

function WebsiteAddress () {
    static $address = null;
    if ($address === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='address'");
        $address = $res[0]["cvalue"];
    }
    echo $address;
}

function WebsiteQQ () {
    static $QQ = null;
    if ($QQ === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='QQ'");
        $QQ = $res[0]["cvalue"];
    }
    echo $QQ;
}

function WebsiteTelephone () {
    static $telephone = null;
    if ($telephone === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='telephone'");
        $telephone = $res[0]["cvalue"];
    }
    echo $telephone;
}

function WebsiteMobile () {
    static $mobile = null;
    if ($mobile === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='mobile'");
        $mobile = $res[0]["cvalue"];
    }
    echo $mobile;
}

function WebsiteEmail () {
    static $email = null;
    if ($email === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='email'");
        $email = $res[0]["cvalue"];
    }
    echo $email;
}

function WebsiteRecord () {
    static $record = null;
    if ($record === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='record'");
        $record = $res[0]["cvalue"];
    }
    echo $record;
}

function WebsiteImportantWord () {
    static $importantword = null;
    if ($importantword === null) {
        $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='importantword'");
        $importantword = $res[0]["cvalue"];
    }
    echo $importantword;
}

function GetNewsList () {
    static $newsList = null;
    global $_GET;
    if ($newsList === null) {
        $offset = isset($_GET["page"]) ? $_GET["page"]-1 : 0;
        if (isset($_GET["type"])) {
            $sql = "SELECT * FROM `wf_news` WHERE `status`=1 AND `articletype`=? AND `publishtime` < NOW() LIMIT 5 OFFSET ?";
            $param = array ($_GET["type"], $offset);
        } else {
            $sql = "SELECT * FROM `wf_news` WHERE `status`=1 AND `publishtime` < NOW() LIMIT 5 OFFSET ?";
            $param = array ($offset);
        }
        $res = ExecuteSql ($sql, $param);
        $newsList = $res;
    }
    return $newsList;
}

function GetNewsTotalPage () {
    static $totalpage = null;
    global $_GET;
    if ($totalpage === null) {
        if (isset($_GET["type"])) {
            $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE `status`=1 AND `articletype`=? AND `publishtime` < NOW()";
            $param = array ($_GET["type"]);
        } else {
            $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE `status`=1 AND `publishtime` < NOW()";
            $param = array ();
        }
        $res = ExecuteSql ($sql, $param);
        $newscount = $res[0]["count"];
        $totalpage = ceil($newscount / 5);
    }
    return $totalpage;
}

function GetNewsPagings () {
    static $pagings = null;
    global $_GET;
    if ($pagings === null) {
        $totalpage = GetNewsTotalPage ();
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        if ($totalpage < 5) {
            $t = array ();
            for ($i=1;$i<-$totalpage;$i++) {
                array_push($t, $i);
            }
            $pagings = $t;
        } else if ($totalpage - $page > 2) {
            $pagings = array ($page-2, $page-1, $page, $page+1, $page+2);
        } else if ($page < 2) {
            $pagings = array (1,2,3,4,5);
        } else {
            $pagings = array ($totalpage-5, $totalpage-4, $totalpage-3, $totalpage-2, $totalpage-1);
        }
    }
    return $pagings;
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
            $res = ExecuteSql ("SELECT `ID`,`title` FROM `wf_news` WHERE `Id`<? AND `publishtime` < NOW() AND `status`=1 LIMIT 1",
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

function PreviousArticleId () {
    $info = GetPreviousArticleInfo ();
    echo $info["ID"];
}

function PreviousArticleTitle () {
    $info = GetPreviousArticleInfo ();
    echo $info["title"];
}

function CheckPreviousArticle () {
    $info = GetPreviousArticleInfo ();
    return $info["ID"] === 0 ? false : true;
}

function GetNextArticleInfo () {
    static $info = null;
    global $_GET;
    if ($info === null) {
        if (isset($_GET["id"])) {
            $res = ExecuteSql ("SELECT `ID`,`title` FROM `wf_news` WHERE `Id`>? AND `publishtime` < NOW() AND `status`=1 LIMIT 1",
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

function NextArticleId () {
    $info = GetNextArticleInfo ();
    echo $info["ID"];
}

function NextArticleTitle () {
    $info = GetNextArticleInfo ();
    echo $info["title"];
}

function CheckNextArticle () {
    $info = GetNextArticleInfo ();
    return $info["ID"] === 0 ? false : true;
}

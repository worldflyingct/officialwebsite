<?php
require_once("config.php");
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"], $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true));
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
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

function GetNewsPaging () {
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

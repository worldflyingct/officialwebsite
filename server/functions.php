<?php
require_once("config.php");
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"].";charset=utf8", $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_EMULATE_PREPARES => false));
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt;
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
    global $config;
    static $webmsg = null;
    if ($webmsg === null) {
        $webmsg = array();
        $stmt = ExecuteSql ("SELECT `ckey`,`cvalue` FROM `".$config["prefix"]."config`");
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = count ($arr);
        for ($i = 0 ; $i < $count ; $i++) {
            $webmsg[$arr[$i]["ckey"]] = $arr[$i]["cvalue"];
        }
    }
    return $webmsg;
}

function GetWebsiteTitle () {
    $webmsg = WebsiteMsg ();
    return $webmsg["title"];
}

function WebsiteTitle () {
    echo GetWebsiteTitle ();
}

function GetWebsiteKeyWords () {
    $webmsg = WebsiteMsg ();
    return $webmsg["keywords"];
}

function WebsiteKeyWords () {
    echo GetWebsiteKeyWords ();
}

function GetWebsiteDescription () {
    $webmsg = WebsiteMsg ();
    return $webmsg["description"];
}

function WebsiteDescription () {
    echo GetWebsiteDescription ();
}

function GetWebsiteAddress () {
    $webmsg = WebsiteMsg ();
    return $webmsg["address"];
}

function WebsiteAddress () {
    echo GetWebsiteAddress ();
}

function GetWebsiteQQ () {
    $webmsg = WebsiteMsg ();
    return $webmsg["QQ"];
}

function WebsiteQQ () {
    echo GetWebsiteQQ ();
}

function GetWebsiteTelephone () {
    $webmsg = WebsiteMsg ();
    return $webmsg["telephone"];
}

function WebsiteTelephone () {
    echo GetWebsiteTelephone ();
}

function GetWebsiteMobile () {
    $webmsg = WebsiteMsg ();
    return $webmsg["mobile"];
}

function WebsiteMobile () {
    echo GetWebsiteMobile ();
}

function GetWebsiteEmail () {
    $webmsg = WebsiteMsg ();
    return $webmsg["email"];
}

function WebsiteEmail () {
    echo GetWebsiteEmail ();
}

function GetWebsiteRecord () {
    $webmsg = WebsiteMsg ();
    return $webmsg["record"];
}

function WebsiteRecord () {
    echo GetWebsiteRecord ();
}

function GetWebsiteImportantWord () {
    $webmsg = WebsiteMsg ();
    return $webmsg["importantword"];
}

function WebsiteImportantWord () {
    echo GetWebsiteImportantWord ();
}

function GetSiteUrl () {
    $webmsg = WebsiteMsg ();
    return $webmsg["siteurl"];
}

function SiteUrl () {
    echo GetSiteUrl ();
}

function AssetsUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["assetsurl"];
}

function RecommendName () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendname"];
}

function RecommendPcUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendpcurl"];
}

function RecommendMobileUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendmobileurl"];
}

function GetWxAppId () {
    $webmsg = WebsiteMsg ();
    return $webmsg["wxappid"];
}

function GetWxAppSecret () {
    $webmsg = WebsiteMsg ();
    return $webmsg["wxappsecret"];
}

function GetBaiduPushToken () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baidupushtoken"];
}

function GetBaiduAppId () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baiduappid"];
}

function GetBaiduAppToken () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baiduapptoken"];
}

function BaiduMapX () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["baidumapx"];
}

function BaiduMapY () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["baidumapy"];
}

function BaiduMapZoom () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["baidumapzoom"];
}

function SetConfig ($arr) {
    global $config;
    foreach ($arr as $k => $v) {
        $sql = "UPDATE `".$config["prefix"]."config` SET `cvalue` = ? WHERE `ckey` = ?";
        $params = array($v, $k);
        ExecuteSql ($sql, $params);
    }
}

function GetWxToken () {
    global $config;
    $webmsg = WebsiteMsg ();
    $nowtime = time();
    $expiresin = 7200 - ($nowtime - intval($webmsg["wxtokentime"]));
    if ($expiresin < 3600) {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$webmsg["wxappid"]."&secret=".$webmsg["wxappsecret"];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($ch);
        curl_close($ch);
        $obj = json_decode($res, true);
        $accesstoken = $obj["access_token"];
        $expiresin = 7200;
        $sql = "UPDATE `".$config["prefix"]."config` SET `cvalue` = ? WHERE `ckey` = ?";
        $params = array ($accesstoken, "wxaccesstoken");
        ExecuteSql ($sql, $params);
        $params = array ($nowtime, "wxtokentime");
        ExecuteSql ($sql, $params);
    } else {
        $accesstoken = $webmsg["wxaccesstoken"];
    }
    return array(
        "access_token" => $webmsg["wxaccesstoken"],
        "expires_in" => $webmsg["wxtokentime"]
    );
}

function SetWxUser ($json) {
    global $config;
    $obj = json_decode($json, true);
    $sql = "INSERT INTO `".$config["prefix"]."wxuser` (`openid`, `usermsg`) VALUES (?, ?) ON DUPLICATE KEY UPDATE `usermsg` = VALUES(`usermsg`)";
    $params = array($obj["openid"], $json);
	ExecuteSql ($sql, $params);
}

function GetNewsList ($column, $status, $type, $keyword, $order, $page, $size, $now) {
    global $config;
    static $newsList = null;
    if ($newsList === null) {
        $sql = "SELECT ".$column." FROM `".$config["prefix"]."news`,`".$config["prefix"]."user` WHERE `".$config["prefix"]."news`.`userid` = `".$config["prefix"]."user`.`userid`";
        $params = array();
        if ($status !== null) {
            $sql .= " AND `articlestatus` = ?";
            array_push ($params, $status);
        }
        if ($type !== null) {
            $sql .= " AND `articletype` = ?";
            array_push ($params, $type);
        }
        if ($keyword !== null) {
            $sql .= " AND `title` LIKE ?";
            array_push ($params, "%".$keyword."%");
        }
        if ($now) {
            $sql .= " AND `publishtime` < NOW()";
        }
        if ($order) {
            $sql .= " ORDER BY `publishtime` DESC";
        } else {
            $sql .= " ORDER BY `articleid` DESC";
        }
        if ($page !== null && $size !== null) {
            $offset = $size*($page-1);
            $sql .= " LIMIT ?,?";
            array_push ($params, $offset, $size);
        }
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $newsList = $res;
    }
    return $newsList;
}

function GetNewsTotalCount ($status, $type, $keyword, $now) {
    global $config;
    static $totalcount = null;
    if ($totalcount === null) {
        $sql = "SELECT COUNT(*) as count FROM `".$config["prefix"]."news` WHERE 1";
        $params = array();
        if ($status !== null) {
            $sql .= " AND `articlestatus` = ?";
            array_push ($params, $status);
        }
        if ($type !== null) {
            $sql .= " AND `articletype` = ?";
            array_push ($params, $type);
        }
        if ($keyword !== null) {
            $sql .= " AND `title` LIKE ?";
            array_push ($params, "%".$keyword."%");
        }
        if ($now) {
            $sql .= " AND `publishtime` < NOW()";
        }
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $totalcount = $res[0]["count"];
    }
    return (int) $totalcount;
}

function GetPreviousArticleInfo ($publishtime) {
    global $config;
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `".$config["prefix"]."news` WHERE `publishtime`<? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` DESC LIMIT 1",
                    array ($publishtime));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "articleid" => 0,
                "title" => "文章不存在"
            );
        }
    }
    return $info;
}

function GetNextArticleInfo ($publishtime) {
    global $config;
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `".$config["prefix"]."news` WHERE `publishtime`>? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` ASC LIMIT 1",
                    array ($publishtime));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "articleid" => 0,
                "title" => "文章不存在"
            );
        }
    }
    return $info;
}

function GetArticleInfo ($articleid, $opt) {
    global $config;
    static $info = null;
    if ($info === null) {
        $sql = "SELECT `title`,`desc`,`publishtime`,`content`,`thumbnail`,`articletype`,`articlestatus` FROM `".$config["prefix"]."news` WHERE `articleid`=?";
        if ($opt) {
            $sql .=  " AND `publishtime` < NOW() AND `articlestatus`=1";
        }
        $stmt = ExecuteSql ($sql,
                    array ($articleid));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $articleinfo = $res[0];
            $previousArticleInfo = GetPreviousArticleInfo ($articleinfo["publishtime"]);
            $nextArticleInfo = GetNextArticleInfo ($articleinfo["publishtime"]);
        } else {
            $articleinfo = array (
                "title" => "文章不存在",
                "desc" => "文章不存在，请检查您的链接。",
                "publishtime" => "0000-00-00 00:00:00",
                "content" => "文章不存在，请检查您的链接。"
            );
            $previousArticleInfo = GetPreviousArticleInfo ($articleinfo["publishtime"]);
            $nextArticleInfo = GetNextArticleInfo ($articleinfo["publishtime"]);
        }
        $info = array (
            "articleinfo" => $articleinfo,
            "previousArticleInfo" => $previousArticleInfo,
            "nextArticleInfo" => $nextArticleInfo
        );
    }
    return $info;
}

function RandomStr ($num) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($chars);
    $str = "";
    for ($i = 0 ; $i < $num ; $i++) {
        $str .= $chars[mt_rand(0, $len-1)];
    }
    return $str;
}

function ImgUse ($filepath) {
    global $config;
    $stmt = ExecuteSql ("SELECT COUNT(*) as `count` FROM `".$config["prefix"]."news` WHERE `thumbnail` = ? OR `content` LIKE ?", array("/".$filepath, "%/".$filepath."%"));
    $info = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $info[0]["count"];
}

function Login ($username, $password) {
    global $config;
    $token = microtime(true)."-".RandomStr (32);
    $stmt = ExecuteSql ("UPDATE `".$config["prefix"]."user` SET `token` = ?, `lastlogin` = NOW() WHERE `user` = ? AND `pass` = MD5(?)", array($token, $username, $password));
    if ($stmt->rowCount() == 0) {
        return false;
    } else {
        return $token;
    }
}

function GetUserInfo ($token) {
    global $config;
    $stmt1 = ExecuteSql ("SELECT `u`.`userid`, `u`.`nickname`, `u`.`lastlogin`, `g`.* FROM `".$config["prefix"]."user` as u,`".$config["prefix"]."group` as g WHERE `u`.`token` = ? AND `u`.`groupid` = `g`.`groupid`", array($token));
    $info = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    if (count($info) === 0) {
        return false;
    }
    return $info[0];
}

function CreateArticle ($title, $desc, $content, $type, $userid, $publishtime, $status, $file) {
    global $config;
    $timestamp = time();
    $path = "/uploads/article/".date("Y/m/d", $timestamp);
    $filepath = $path."/".$timestamp.RandomStr (4).".png";
    if (!is_dir($path)) {
        mkdir (getcwd().$path, 0777, true);
    }
    move_uploaded_file($file["tmp_name"], getcwd().$filepath);
    $stmt = ExecuteSql ("INSERT `".$config["prefix"]."news` (`title`, `desc`, `content`, `thumbnail`, `articletype`, `userid`, `createtime`, `modifytime`, `publishtime`, `articlestatus`) VALUES (?,?,?,?,?,?,NOW(),NOW(),?,?) ",
                array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status));
    return $stmt->rowCount();
}

function EditArticle ($articleid, $title, $desc, $content, $type, $userid, $publishtime, $status, $oldthumbnail, $file) {
    global $config;
    if ($file) {
        $oldfilepath = getcwd().$oldthumbnail;
        if (is_file($oldfilepath)) {
            unlink ($oldfilepath);
        }
        $timestamp = time();
        $path = "/uploads/article/".date("Y/m/d", $timestamp);
        $filepath = $path."/".$timestamp.RandomStr (4).".png";
        if (!is_dir(getcwd().$path)) {
            mkdir (getcwd().$path, 0777, true);
        }
        move_uploaded_file($file["tmp_name"], getcwd().$filepath);
        $stmt = ExecuteSql ("UPDATE `".$config["prefix"]."news` SET `title` = ?, `desc` = ?, `content` = ?, `thumbnail` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status, $articleid));
    } else {
        $stmt = ExecuteSql ("UPDATE `".$config["prefix"]."news` SET `title` = ?, `desc` = ?, `content` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $type, $userid, $publishtime, $status, $articleid));
    }
    return $stmt->rowCount();
}

function GetSpiderList ($spidertype, $page, $size) {
    static $list = null;
    global $config;
    if ($list === null) {
        $sql = "SELECT * FROM `".$config["prefix"]."spiderlog` WHERE 1";
        $params = array ();
        if ($spidertype != null) {
            $sql .= " AND `name` = ?";
            array_push($params, $spidertype);
        }
        $offset = $size*($page-1);
        $sql .= " ORDER BY `spiderlogId` DESC LIMIT ?,?";
        array_push($params, $offset, $size);
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $list = $res;
    }
    return $list;
}

function GetSpiderTotalCount ($spidertype) {
    global $config;
    static $list = null;
    if ($list === null) {
        $sql = "SELECT COUNT(*) as count FROM `".$config["prefix"]."spiderlog` WHERE 1";
        $params = array ();
        if ($spidertype != null) {
            $sql .= " AND `name` = ?";
            array_push($params, $spidertype);
        }
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $totalcount = $res[0]["count"];
    }
    return (int) $totalcount;
}

function SpiderLog() {
    global $config;
    $bots = array (
        'Googlebot' => '谷歌搜索',
        'Baiduspider' => '百度搜索',
        '360Spider' => '360搜索',
        'HaoSouSpider' => '360搜索',
        'Sogou web spider' => '搜狗搜索',
        'Sogou inst spider' => '搜狗搜索',
        'Sogou spider2' => '搜狗搜索',
        'Sogou blog' => '搜狗搜索',
        'Sogou News Spider' => '搜狗搜索',
        'Sogou Orion spider' => '搜狗搜索',
        'Sosospider' => '搜搜搜索'
    );
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    foreach ($bots as $k => $v) {
        if(stristr($useragent, $k) != null) {
            ExecuteSql ("INSERT `".$config["prefix"]."spiderlog` (`name`, `target`, `IP`, `time`) VALUES (?,?,?,NOW())",
                array($v, $_SERVER["REQUEST_URI"], $_SERVER["REMOTE_ADDR"]));
            break;
        }
    }
}

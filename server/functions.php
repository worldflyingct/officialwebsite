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
    static $webmsg = null;
    if ($webmsg === null) {
        $webmsg = array();
        $stmt = ExecuteSql ("SELECT `ckey`,`cvalue` FROM `wf_config`");
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

function SiteUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["siteurl"];
}

function AssetsUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["assetsurl"];
}

function GetNewsList ($column, $status, $type, $keyword, $order, $page, $size, $now) {
    static $newsList = null;
    if ($newsList === null) {
        $sql = "SELECT ".$column." FROM `wf_news`,`wf_user` WHERE `wf_news`.`userid` = `wf_user`.`userid`";
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
    static $totalcount = null;
    if ($totalcount === null) {
        $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE 1";
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

function GetArticleInfo ($articleid, $opt) {
    static $info = null;
    if ($info === null) {
        $sql = "SELECT `title`,`desc`,`publishtime`,`content`,`thumbnail`,`articletype`,`articlestatus` FROM `wf_news` WHERE `articleid`=?";
        if ($opt) {
            $sql .=  " AND `publishtime` < NOW() AND `articlestatus`=1";
        }
        $stmt = ExecuteSql ($sql,
                    array ($articleid));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "title" => "文章不存在",
                "desc" => "文章不存在，请检查您的链接。",
                "publishtime" => "0000-00-00 00:00:00",
                "content" => "文章不存在，请检查您的链接。"
            );
        }
    }
    return $info;
}

function GetPreviousArticleInfo ($publishtime) {
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `wf_news` WHERE `publishtime`<? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` DESC LIMIT 1",
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
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `wf_news` WHERE `publishtime`>? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` ASC LIMIT 1",
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

function Login ($username, $password) {
    $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $len = strlen($chars);
    $token = microtime(true)."-";
    for ($i = 0 ; $i < 32 ; $i++) {
        $token .= $chars[mt_rand(0, $len-1)];
    }
    $stmt = ExecuteSql ("UPDATE `wf_user` SET `token` = ?, `lastlogin` = NOW() WHERE `user` = ? AND `pass` = MD5(?)", array($token, $username, $password));
    if ($stmt->rowCount() == 0) {
        return false;
    } else {
        return $token;
    }
}

function GetUserInfo ($token) {
    $stmt1 = ExecuteSql ("SELECT `u`.`userid`, `u`.`nickname`, `u`.`lastlogin`, `g`.* FROM `wf_user` as u,`wf_group` as g WHERE `u`.`token` = ? AND `u`.`groupid` = `g`.`groupid`", array($token));
    $info = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    if (count($info) === 0) {
        return false;
    }
    return $info[0];
}

function CreateArticle ($title, $desc, $content, $type, $userid, $publishtime, $status, $file) {
    $timestamp = time();
    $path = "/uploads/article/".date("Y/m/d", $timestamp);
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($chars);
    $filepath = $path."/".$timestamp;
    for ($i = 0 ; $i < 4 ; $i++) {
        $filepath .= $chars[mt_rand(0, $len-1)];
    }
    $filepath .= ".png";
    if (!is_dir($path)) {
        mkdir (getcwd().$path, 0777, true);
    }
    move_uploaded_file($file["tmp_name"], getcwd().$filepath);
    $stmt = ExecuteSql ("INSERT `wf_news` (`title`, `desc`, `content`, `thumbnail`, `articletype`, `userid`, `createtime`, `modifytime`, `publishtime`, `articlestatus`) VALUES (?,?,?,?,?,?,NOW(),NOW(),?,?) ",
                array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status));
    return $stmt->rowCount();
}

function EditArticle ($articleid, $title, $desc, $content, $type, $userid, $publishtime, $status, $oldthumbnail, $file) {
    if ($file) {
        $oldfilepath = getcwd().$oldthumbnail;
        if (is_file($oldfilepath)) {
            unlink ($oldfilepath);
        }
        $timestamp = time();
        $path = "/uploads/article/".date("Y/m/d", $timestamp);
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $len = strlen($chars);
        $filepath = $path."/".$timestamp;
        for ($i = 0 ; $i < 4 ; $i++) {
            $filepath .= $chars[mt_rand(0, $len-1)];
        }
        $filepath .= ".png";
        if (!is_dir(getcwd().$path)) {
            mkdir (getcwd().$path, 0777, true);
        }
        move_uploaded_file($file["tmp_name"], getcwd().$filepath);
        $stmt = ExecuteSql ("UPDATE `wf_news` SET `title` = ?, `desc` = ?, `content` = ?, `thumbnail` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status, $articleid));
    } else {
        $stmt = ExecuteSql ("UPDATE `wf_news` SET `title` = ?, `desc` = ?, `content` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $type, $userid, $publishtime, $status, $articleid));
    }
    return $stmt->rowCount();
}

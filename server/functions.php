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

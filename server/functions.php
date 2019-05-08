<?php
require_once("config.php");
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"], $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true));
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function websitetitle () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='title'");
    echo $res[0]["cvalue"];
}

function websitekeywords () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='keywords'");
    echo $res[0]["cvalue"];
}

function websitedescription () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='description'");
    echo $res[0]["cvalue"];
}

function websiteaddress () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='address'");
    echo $res[0]["cvalue"];
}

function websiteQQ () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='QQ'");
    echo $res[0]["cvalue"];
}

function websitetelephone () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='telephone'");
    echo $res[0]["cvalue"];
}

function websitemobile () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='mobile'");
    echo $res[0]["cvalue"];
}

function websiteemail () {
    $res = ExecuteSql ("SELECT `cvalue` FROM `wf_config` WHERE `ckey`='email'");
    echo $res[0]["cvalue"];
}

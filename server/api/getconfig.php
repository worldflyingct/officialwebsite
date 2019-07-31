<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
$info = GetUserInfo ($obj["token"]);
if ($info == false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($info["getconfig"] != 1) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "权限不足"
    );
} else {
    $ret = array(
        "errcode" => 0,
        "data" => array(
            "title" => GetWebsiteTitle (),
            "keywords" => GetWebsiteKeyWords (),
            "description" => GetWebsiteDescription (),
            "address" => GetWebsiteAddress (),
            "QQ" => GetWebsiteQQ (),
            "telephone" => GetWebsiteTelephone (),
            "mobile" => GetWebsiteMobile (),
            "email" => GetWebsiteEmail (),
            "importantword" => GetWebsiteImportantWord (),
            "record" => GetWebsiteRecord ()
        )
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
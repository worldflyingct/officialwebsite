<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
$userpermission = GetUserPermission ($obj["token"]);
if (count ($userpermission) == 0) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else {
    if ($userpermission[0]["getnewslist"] == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "权限不足"
        );
    } else {
        $status = isset ($obj["articlestatus"]) ? $obj["articlestatus"] : null;
        $type = isset ($obj["articletype"]) ? $obj["articletype"] : null;
        $keyword = isset ($obj["keyword"]) ? $obj["keyword"] : null;
        $list = GetNewsList (
            "`articleid`,`title`,`createtime`,`modifytime`,`publishtime`,`articletype`,`articlestatus`,`nickname`",
            $status,
            $type,
            $keyword,
            $obj["order"],
            $obj["page"],
            $obj["size"],
            false);
        $count = GetNewsTotalCount (
            $status,
            $type,
            $keyword,
            false);
        $ret = array(
            "errcode" => 0,
            "articlelist" => $list,
            "totalcount" => $count,
        );
    }
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
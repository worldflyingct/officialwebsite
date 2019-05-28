<?php
$userpermission = GetUserPermission ($_POST["token"]);
if (count ($userpermission) == 0) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($_POST["articleid"] == 0) { // 新增
    $res  = CreateArticle (
                $_POST["title"],
                $_POST["desc"],
                $_POST["content"],
                $_POST["type"],
                $userpermission[0]["userid"],
                $_POST["publishtime"],
                $_POST["status"]);
    if ($res == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "新建文章失败"
        );
    } else {
        $ret = array(
            "errcode" => 0
        );
    }
} else { // 修改
    ;
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
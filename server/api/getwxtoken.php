<?php
$wxtokenmsg = GetWxToken ();
$nowtime = time();
if ($nowtime - intval($wxtokenmsg["wxtokentime"]) > 3600) {
	$wxappid = GetWxAppId ();
	$wxappsecret = GetWxAppSecret ();
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$wxappid."&secret=".$wxappsecret;
	$res = file_get_contents($url);
	$obj = json_decode($res, true);
	$accesstoken = $obj["access_token"];
	SetWxToken ($accesstoken, $nowtime);
} else {
	$accesstoken = $wxtokenmsg["wxaccesstoken"];
}

echo json_encode(array("access_token" => $accesstoken), JSON_UNESCAPED_UNICODE);

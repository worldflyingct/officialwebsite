<?php
$wxtokenmsg = GetWxToken ();
$nowtime = time();
$expiresin = 7200 - ($nowtime - intval($wxtokenmsg["wxtokentime"]));
if ($expiresin < 3600) {
	$wxappid = GetWxAppId ();
	$wxappsecret = GetWxAppSecret ();
	$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$wxappid."&secret=".$wxappsecret;
	$res = file_get_contents($url);
	$obj = json_decode($res, true);
	$accesstoken = $obj["access_token"];
	$expiresin = 7200;
	SetWxToken ($accesstoken, $nowtime);
} else {
	$accesstoken = $wxtokenmsg["wxaccesstoken"];
}

echo json_encode(array("access_token" => $accesstoken, "expires_in" => $expiresin), JSON_UNESCAPED_UNICODE);

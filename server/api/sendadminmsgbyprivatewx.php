<?php
$webmsg = WebsiteMsg ();
$postdata = '{"touser":"'.$webmsg["wxprivateadminopenid"].'","template_id":"'.$webmsg["wxprivatetemplateid"].'","data":{"body":{"value":"'.file_get_contents("php://input").'","color":"#173177"}}}';
$accesstoken = GetPrivateWxToken ();
$url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$accesstoken["access_token"];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
$result = curl_exec($ch);
curl_close($ch);
header('Access-Control-Allow-Origin:*');
echo $result;
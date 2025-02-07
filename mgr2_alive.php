<?php

// 設定 5 秒後自動刷新
//echo '<meta http-equiv="refresh" content="5">';


$protectedUrl = "https://moi-mgr2.moi.gov.tw/SiteLobby.aspx";
//$session_value ='diuyvx4qqzj00nho4lgvofyz';
$session_value =$_GET['sid']; 
$sessionId = "ASP.NET_SessionId=$session_value"; // 直接帶入 Session ID

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $protectedUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Cookie: $sessionId"]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

echo '目前使用SESSION ID:'.$session_value.'<br><br><br>';

echo $response;
?>
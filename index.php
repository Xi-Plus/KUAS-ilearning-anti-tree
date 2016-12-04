<?php
require_once("config/config.php");
require_once("function/cURL-HTTP-function/curl.php");

$res = cURL_HTTP_Request("http://ilearning.kuas.edu.tw",null,$cfg['headers']);
$html = $res->html;
preg_match('/name="login_key" value="(.+?)"/', $html, $m);
$login_key = $m[1];

$post=array(
	"username" => $cfg['username'],
	"login_key" => $login_key
);
for ($i=1; $i <= $cfg['times']; $i++) { 
	$res=cURL_HTTP_Request("http://ilearning.kuas.edu.tw/login.php",$post,$cfg['headers']);
	echo "login ".$i."/".$cfg['times']."\n";
	usleep($cfg['sleep']);
}

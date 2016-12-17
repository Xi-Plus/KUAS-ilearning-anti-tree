<?php
// rename this file to config.php and modify following data

$cfg['cURL'] = "curl 'http://ilearning.kuas.edu.tw/login.php' -H 'Cookie: wm_lang=Big5; school_hash=********************************' -H 'Origin: http://ilearning.kuas.edu.tw' -H 'Accept-Encoding: gzip, deflate' -H 'Accept-Language: zh-TW,zh;q=0.8,en-US;q=0.6,en;q=0.4,zh-CN;q=0.2' -H 'Upgrade-Insecure-Requests: 1' -H 'User-Agent: User-Agent:Mozilla/5.0（iPad; U; CPU OS 3_2_1 like Mac OS X; en-us）AppleWebKit/531.21.10（KHTML, like Gecko）Mobile/7B405' -H 'Content-Type: application/x-www-form-urlencoded' -H 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8' -H 'Cache-Control: max-age=0' -H 'Referer: http://ilearning.kuas.edu.tw/' -H 'Connection: keep-alive' --data 'username=**********&password=*******************&login_key=********************************&encrypt_pwd=**************&passwd=********' --compressed";
$cfg['times'] = 1;
$cfg['sleep'] = 1000;

$cfg['set_time_limit'] = $cfg['sleep']/1000+5;

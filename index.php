<?php
require_once("config/config.php");

for ($i=1; $i <= $cfg['times']; $i++) {
	system($cfg['cURL']);
	echo "login ".$i."/".$cfg['times']."\n";
	usleep($cfg['sleep']*1000);
}

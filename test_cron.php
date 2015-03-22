<?php

$content = "cron runned";
echo "/Users/kae/Documents/workspace/php/log/run_.txt";
$fp = "/Users/kae/Documents/workspace/php/log/run_".time().".txt","wb");
fwrite($fp,$content);
fclose($fp);
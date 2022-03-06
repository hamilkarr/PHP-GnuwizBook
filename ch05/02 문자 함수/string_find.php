<?php
header('content-type:text/html; charset=euc-kr');

echo substr(string:'gnuwiz', offset: 1)."<br/>";
echo substr(string:'gnuwiz', offset: 1, length:3)."<br/>";
echo substr(string:'gnuwiz', offset: 0, length:4)."<br/>";
echo substr(string:'gnuwiz', offset: 0, length:8)."<br/>";
echo substr(string:'gnuwiz', offset: -1, length:1)."<br/>";
echo "<br/>";

$email = 'info@gnuwiz.com';
$domain = strstr(haystack: $email, needle: '@');
echo $domain."<br/>";

$user = strstr($email, '@', before_needle: true);
echo $user."<br/>";

$pos = strpos($email,'@');
echo $pos."<br/>";

$pos2 = strpos($email, '-');
if($pos2==false) {
    echo "발견되지 않음";
} else {
    echo $pos2."위치에 있음";
}
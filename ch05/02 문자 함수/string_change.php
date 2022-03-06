<?php
header('content-type:text/html; charset=euc-kr');

$str = "hello gnuwiz.com";

echo strtoupper($str)."<br/>";
echo strtolower($str)."<br/>";
echo "ucfirst :". ucfirst($str)."<br/>";
echo "ucwords :". ucwords($str)."<br/>";
echo "lcfirst: ".lcfirst($str)."<br/>";

$str2 = strtr($str, "hello", "Welcome");
echo $str2."<br/>";

$replace_pairs = [
    'hello'=>'Welcome',
    'gnuwiz'=>'php',
    'com'=>'co.kr',
];

$str3 = strtr($str,$replace_pairs);
echo $str3."<br/>";
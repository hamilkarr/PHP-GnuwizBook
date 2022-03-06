<?php
header('content-type:text/html; charset=euc-kr');
$filename="text.txt";
echo filesize($filename)."<br/>";

$path = "myapp/ch05/05 디렉터리 함수/text.txt";
echo basename($path,'.txt')."<br/>";
echo dirname($path)."<br/>";

echo "안녕하세요.";
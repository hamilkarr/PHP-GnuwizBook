<?php
header('content-type:text/html; charset=euc-kr');
$filename="text.txt";
echo filesize($filename)."<br/>";

$path = "myapp/ch05/05 ���͸� �Լ�/text.txt";
echo basename($path,'.txt')."<br/>";
echo dirname($path)."<br/>";

echo "�ȳ��ϼ���.";
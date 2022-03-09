<?php
header('content-type: text/html; charset=euc-kr;');

$msg = "예외 클래스 오류 발생";
$code = 123;
$e = new Exception($msg, $code);

echo "예외 코드 : ".$e->getCode();
echo "<br/>";

echo "예외 메시지 : ".$e->getMessage();
<?php
header('content-type: text/html; charset=euc-kr;');

$msg = "���� Ŭ���� ���� �߻�";
$code = 123;
$e = new Exception($msg, $code);

echo "���� �ڵ� : ".$e->getCode();
echo "<br/>";

echo "���� �޽��� : ".$e->getMessage();
<?php
header('content-type:text/html; charset=euc-kr');

// $str1 = "Hello World";
$str1 = null;
$str2 = "PHP";
$result1 = $str1 ?? $str2;
echo $result1."<br/>";
?>
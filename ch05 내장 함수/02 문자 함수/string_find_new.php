<?php
header('content-type:text/html; charset=euc-kr');

$str = "hello gnuwiz.com";

$result = str_contains($str, "gnuwiz");
echo $result."<br/>";

$result2 = str_starts_with($str, "hello");
echo $result2."<br/>";

$result3 = str_ends_with($str, "com");
echo $result3."<br/>";
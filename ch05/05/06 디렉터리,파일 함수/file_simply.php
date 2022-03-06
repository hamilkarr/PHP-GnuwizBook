<?php
header('content-type:text/html; charset=euc-kr');

$filename = "text.txt";
$content = file_get_contents($filename);
file_put_contents("text2.txt",$content);
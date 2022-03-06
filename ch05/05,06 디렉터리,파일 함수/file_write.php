<?php
header('content-type:text/html; charset=euc-kr');

$file = fopen("write.txt",'w');
fwrite($file, "안녕하세요");
fclose($file);
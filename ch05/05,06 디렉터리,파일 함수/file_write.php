<?php
header('content-type:text/html; charset=euc-kr');

$file = fopen("write.txt",'w');
fwrite($file, "�ȳ��ϼ���");
fclose($file);
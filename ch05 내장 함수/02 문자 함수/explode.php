<?php
header('content-type:text/html; charset=euc-kr');

$str = "www.gnuwiz.com";

$explode_str = explode(".", $str);

echo "<pre>";
var_dump($explode_str);
echo "</pre>";
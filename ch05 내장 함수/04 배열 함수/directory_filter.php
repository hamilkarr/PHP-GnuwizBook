<?php
header('content-type:text/html; charset=euc-kr');
$dp = opendir('.');
while (($file = readdir($dp)) != false) {
    if (fnmatch("array*", $file, FNM_CASEFOLD)) {
        echo "�����̸�: ".$file."<br/>";
    }
}

closedir($dp);

$list = glob("[Aa]rray*");
echo "<pre>";
print_r($list);
echo "</pre>";
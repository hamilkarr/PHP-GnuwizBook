<?php
header('content-type:text/html; charset=euc-kr');
$filename= "text.txt";

$fp = fopen($filename, 'r');
while ($reading = fgetc($fp)) {
    echo $reading."<br/>";
}
fclose($fp);

$fp = fopen($filename, 'r');
while($reading= fgets($fp)) {
    echo $reading."<br/>";    
}

rewind($fp);

$length = filesize($filename);
$string = fread($fp, $length);
fclose($fp);

$string = nl2br($string);
echo $string;
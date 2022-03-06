<?php
header('Content-Type: text/html; charset=euc-kr');
echo true ? 'true':'false' ;
echo "<br/>";

$num = 1;
echo $num == 1 ? "1입니다": "1이 아닙니다. ";
echo "<br/>";
$age = 20;
$my_age = $age ? : 19;
echo $my_age;
?>
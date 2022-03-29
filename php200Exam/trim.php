<?php
    header('content-type: text/html; charset=euc-kr');

    $str = " 양쪽 모두 공백 없앰 ";
    echo '|'.trim($str).'|';
    echo "<br>";

    echo '|'.ltrim($str).'|'.'<br>';
    echo '|'.rtrim($str).'|'.'<br>';

    $str2 = 'everdevel';
    echo strtoupper($str2)."<br>";

    $str3 = 'EVERDEVEL';
    echo strtolower($str3)."<br>";

    $str4 = 'beanscent';
    echo "문자열 수: ".strlen($str4)."<br>";
    $str5 = 'b e a n s c e n t';
    echo '문자열 수: '.strlen($str5)."<br>";

    $str6 = "welcome to everdevel";
    $changeWord = str_replace('everdevel',$str4,$str6);
    echo $changeWord."<br>";

    $cutStr = substr($str6,0,5);
    echo $cutStr."<br>";

    $str7 = 'one sugar dream';
    $str7 = ucwords($str7);
    echo $str7."<br>";

    $str6 = ucwords($str6);
    echo $str6."<br>";
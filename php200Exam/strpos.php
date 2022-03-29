<?php
    header("content-type:text/html; charset=euc-kr");

    $str = 'web development';
    $findStr = 'd';
    $pos = strpos($str,$findStr);
    echo "문자열 {$findStr}의 위치는: ".$pos."<br>";

    // 변수의 존재 확인하기

    if(isset($str2)) {
        echo "변수 str이 존재합니다.";
    } else {
        echo "변수 str이 존재하지 않습니다.";
    }

    echo "<br>";
    $str2 = "string";

    if(isset($str2)) {
        echo "변수 str이 존재합니다.";
        echo "<br><br>";
    } else {
        echo "변수 str이 존재하지 않습니다.";
        echo "<br>";
    }

    $val = "true";
    echo "변수 var의 데이터형: ".gettype($val)."<br>";

    settype($val,'bool');
    echo "변수 var의 데이터형: ".gettype($val)."<br>";
    var_dump($val);
    echo "<br><br>";

    $var2 = '';
    echo '값이 빈 문자열인 경우';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = null;
    echo '값이 null인 경우 ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = [];
    echo '값이 빈 배열인 경우 ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = 0;
    echo '값이 0인 경우 ';
    var_dump(empty($var2));
    echo '<br>';

    $var2  ='0';
    echo '값이 문자열 0인 경우 ';
    var_dump(empty($var2));
    echo '<br>';

    $var2 = 'string';
    echo '값이 문자열 string인 경우 ';
    var_dump(empty($var2));
    echo '<br>';

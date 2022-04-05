<?php
    header('content-type: text/html; charset=euc-kr');

    echo microtime();
    echo "<br>";
    echo microtime(true);
    echo "<br>";

    $array = range(1,100);
    echo 'Big: '.max($array);

    $array2 = [1,4,6,3,21,3];
    echo 'small: '.min($array2);
    echo "<br>";

    $num = 123456;
    $round = round($num,-3);
    echo $round;
    echo "<br>";

    $num2 = 123.345234;
    $floor = floor($num2);
    echo $floor;
    echo "<br>";

    $ceil = ceil($num2);
    echo $ceil;
    echo "<br>";

    $num4 = 12312321323;
    echo number_format($num4);
    echo "<br>";

    $num5 = 1231232.65435123;
    echo number_format($num5, 3);
    echo "<br>";

    echo number_format($num5, 5, '-','&');
    echo "<br>";
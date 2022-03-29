<?php
    header('content-type:text/html; charset=euc-kr');

    $sum = 0;

    $num = 1;

    while ($num <= 10) {
        $sum += $num;
        
        $num++;
    }

    echo "1부터 10까지 누적 합은 {$sum}입니다.<br>";

    $i = 0;
    do {
        echo "안녕하세요";
        $i++;
    }

    while ($i < 5);
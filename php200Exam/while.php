<?php
    header('content-type:text/html; charset=euc-kr');

    $sum = 0;

    $num = 1;

    while ($num <= 10) {
        $sum += $num;
        
        $num++;
    }

    echo "1���� 10���� ���� ���� {$sum}�Դϴ�.<br>";

    $i = 0;
    do {
        echo "�ȳ��ϼ���";
        $i++;
    }

    while ($i < 5);
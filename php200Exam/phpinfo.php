<?php
    header('content-type:text/html; charset=euc-kr');
    
    $startTime = mktime(0,0,0,1,1,2022);
    $endTime = mktime(0,0,10,1,1,2022);

    $nowTime = time();

    if ($nowTime >= $startTime && $nowTime <= $endTime) {
        echo "���� �̺�Ʈ�� ������ �� �ִ� �ð��Դϴ�.";
    } else {
        echo "�̺�Ʈ �������̰ų� ����Ǿ����ϴ�.";
    }

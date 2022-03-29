<?php
    header('content-type:text/html; charset=euc-kr');
    
    $startTime = mktime(0,0,0,1,1,2022);
    $endTime = mktime(0,0,10,1,1,2022);

    $nowTime = time();

    if ($nowTime >= $startTime && $nowTime <= $endTime) {
        echo "현재 이벤트에 참여할 수 있는 시간입니다.";
    } else {
        echo "이벤트 시작전이거나 종료되었습니다.";
    }

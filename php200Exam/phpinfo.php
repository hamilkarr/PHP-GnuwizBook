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

    $year = 2022;
    $month = 3;
    $day = 30; // 목요일

    $targetDateTimeStamp = mktime(0,0,0,$month,$day,$year);

    $dayOfWeek = date('w', $targetDateTimeStamp);
    $secondOfOneDay = 60 * 60 * 24;

    switch($dayOfWeek) {
        case 1:// 월요일
            $monday = $targetDateTimeStamp;
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
            break;
        case 2: // 화요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 1);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
            break;
        case 3: // 수요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
            break;
        case 4: // 목요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
            break;
        case 5: // 금요일
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 0);
            break;
    }

    if(isset($monday) && isset($friday)) {
        echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
        echo "<br>";
        echo "월요일: ".date('Y-m-d', $monday);
        echo "<br>";
        echo "금요일: ".date("Y-m-d", $friday);
    }else{
        echo "월요일부터 금요일의 날짜를 입력하세요";
    }

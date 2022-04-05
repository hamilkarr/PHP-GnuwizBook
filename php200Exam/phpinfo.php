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

    $year = 2022;
    $month = 3;
    $day = 30; // �����

    $targetDateTimeStamp = mktime(0,0,0,$month,$day,$year);

    $dayOfWeek = date('w', $targetDateTimeStamp);
    $secondOfOneDay = 60 * 60 * 24;

    switch($dayOfWeek) {
        case 1:// ������
            $monday = $targetDateTimeStamp;
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
            break;
        case 2: // ȭ����
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 1);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
            break;
        case 3: // ������
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
            break;
        case 4: // �����
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
            break;
        case 5: // �ݿ���
            $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
            $friday = $targetDateTimeStamp + ($secondOfOneDay * 0);
            break;
    }

    if(isset($monday) && isset($friday)) {
        echo "{$year}�� {$month}�� {$day}���� �ִ� ���� �����ϰ� �ݿ����� ��¥";
        echo "<br>";
        echo "������: ".date('Y-m-d', $monday);
        echo "<br>";
        echo "�ݿ���: ".date("Y-m-d", $friday);
    }else{
        echo "�����Ϻ��� �ݿ����� ��¥�� �Է��ϼ���";
    }

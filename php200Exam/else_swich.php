<?php
    header('content-type:text/html; charset=euc-kr');

    $gender = 'women';
    $likePlace = 'Universal Studio';

    if ($gender == 'man') {
        echo 'only woman';
    } else switch ($likePlace) {
        case 'disneyland':
            echo "����Ϸ��带 �����մϴ�.";
            break;
        case 'disneysea':
            echo "����Ͼ��� �����մϴ�.";
            break;
        case 'Universal Studio':
            echo "���Ϲ��� ��Ʃ����� �����մϴ�.";
            break;
        default:
            echo "�ƹ��͵� �������� �ʽ��ϴ�.";
            break;
    }

    echo "<br>";
    $age = 24;
    switch ($age) {
        case ($age >= 10 && $age <=19);
        echo "10�� �Դϴ�.";
        break;

        case ($age >=20 && $age <=29);
        echo "20�� �Դϴ�.";
        break;

        case ($age >=30 && $age <= 39);
        echo "30�� �Դϴ�.";
        break;
    }
<?php
    header('content-type:text/html; charset=euc-kr');

    $gender = 'women';
    $likePlace = 'Universal Studio';

    if ($gender == 'man') {
        echo 'only woman';
    } else switch ($likePlace) {
        case 'disneyland':
            echo "디즈니랜드를 좋아합니다.";
            break;
        case 'disneysea':
            echo "디즈니씨를 좋아합니다.";
            break;
        case 'Universal Studio':
            echo "유니버셜 스튜디오를 좋아합니다.";
            break;
        default:
            echo "아무것도 좋아하지 않습니다.";
            break;
    }

    echo "<br>";
    $age = 24;
    switch ($age) {
        case ($age >= 10 && $age <=19);
        echo "10대 입니다.";
        break;

        case ($age >=20 && $age <=29);
        echo "20대 입니다.";
        break;

        case ($age >=30 && $age <= 39);
        echo "30대 입니다.";
        break;
    }
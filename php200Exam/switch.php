<?php
  header('content-type:text/html; charset=euc-kr');
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
    echo "<br>";

    $sum = 0;
    $maxValue = 50;
    for ($i = 1; $i <= $maxValue; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
        }
    }

    echo "1���� {$maxValue}������ ¦�� ������ : {$sum}";
    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo $i.',';
    }
<?php
    header('content-type:text/html; charset=euc-kr');
    for ($i=1; $i <= 3; $i++){
        echo "�ٱ��� for�� Ƚ��: {$i}<br>";

        for ($n=1; $n <=3; $n++) {
            echo "���� for�� Ƚ��: {$n}<br>";
        }

        echo "<br>";
    }

    for($j=2; $j<=3; $j++){
        echo "{$j}��<br>";
        for($k=1; $k<=9; $k++){
            $mul = $j*$k;
            echo "{$j} ���ϱ� {$k} = {$mul}<br>";
        }
        echo "<br><br>";
    }
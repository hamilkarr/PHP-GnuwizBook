<?php
    header('content-type:text/html; charset=euc-kr');
    for ($i=1; $i <= 3; $i++){
        echo "¹Ù±ùÂÊ for¹® È½¼ö: {$i}<br>";

        for ($n=1; $n <=3; $n++) {
            echo "¾ÈÂÊ for¹® È½¼ö: {$n}<br>";
        }

        echo "<br>";
    }

    for($j=2; $j<=3; $j++){
        echo "{$j}´Ü<br>";
        for($k=1; $k<=9; $k++){
            $mul = $j*$k;
            echo "{$j} °öÇÏ±â {$k} = {$mul}<br>";
        }
        echo "<br><br>";
    }
<?php
    header('content-type: text/html; charset=euc-kr');

    $randNum = rand(1,3);
    $kawibawibo = '';

    switch($randNum){
        case 1 : 
            $kawibawibo = '����';
            break;
        case 2 : 
            $kawibawibo = '����';
            break;
        case 3 : 
            $kawibawibo = '��';
            break;
        default : 
            $kawibawibo = '';
            break;
    }

    echo "��ǻ���� ������: {$kawibawibo} <br>";

    function sum($param1 = 50, $param2 = 100){
        $sum = $param1 + $param2;
        return $sum;
    }

    echo sum(5,10)."<br>";
    echo sum(5)."<br>";
    echo sum()."<br>";

    echo $_SERVER['PHP_SELF'];

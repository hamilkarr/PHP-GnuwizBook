<?php
    header('content-type:text/html; charset=euc-kr');

    $memberList[0] =  ['name'=>'미우','id'=>'miu'];
    $memberList[1] =  ['name'=>'유나','id'=>'yuna'];
    $memberList[2] =  ['name'=>'민후','id'=>'minhoo'];
    $memberList[3] =  ['name'=>'해윤','id'=>'haeyun'];

    foreach($memberList as $ml){
        echo '이름: '.$ml['name']."<br>";
        echo "ID: ".$ml['id']."<br><br>";
    }

    $memberList2 = ['name'=>'미우','id'=>'miu'];
    foreach($memberList2 as $index => $value){
        echo "인덱스: {$index}의 값: {$value}";
        echo "<br>";
    }

    foreach ($memberList as $key => $value) {
        foreach($value as $key2 => $value2) {
            echo "인덱스: {$key2}의 값: {$value2}<br>";
        }
    }
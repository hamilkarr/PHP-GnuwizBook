<?php
    header('content-type:text/html; charset=euc-kr');

    $memberList[0] =  ['name'=>'�̿�','id'=>'miu'];
    $memberList[1] =  ['name'=>'����','id'=>'yuna'];
    $memberList[2] =  ['name'=>'����','id'=>'minhoo'];
    $memberList[3] =  ['name'=>'����','id'=>'haeyun'];

    foreach($memberList as $ml){
        echo '�̸�: '.$ml['name']."<br>";
        echo "ID: ".$ml['id']."<br><br>";
    }

    $memberList2 = ['name'=>'�̿�','id'=>'miu'];
    foreach($memberList2 as $index => $value){
        echo "�ε���: {$index}�� ��: {$value}";
        echo "<br>";
    }

    foreach ($memberList as $key => $value) {
        foreach($value as $key2 => $value2) {
            echo "�ε���: {$key2}�� ��: {$value2}<br>";
        }
    }
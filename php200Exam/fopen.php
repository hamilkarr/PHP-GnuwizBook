<?php
    header('content-type:text/html; charset=euc-kr');

    $content = " �ѱ� �׽�Ʈ!";
    $fileName = 'helloworld.txt';

    // if(file_exists($fileName)){
    //     $fopen = fopen($fileName,'r');
    //     if($fopen) {
    //         $fread = fread($fopen, filesize($fileName));
    //         if($fread) {
    //             echo $fread;
    //             fclose($fopen);
    //         } else {
    //             echo "���� �б⿡ �����߽��ϴ�.";
    //         }
    //     }else {
    //         echo "���� ���⿡ �����߽��ϴ�.";
    //     }
    // }else {
    //     echo "������ �������� �ʽ��ϴ�.";
    // }

    if(file_exists($fileName)) {
        $fopen = fopen($fileName, 'r');
        $readByte = 512;
        if($fopen) {
            while($fgets = fgets($fopen,$readByte)){
                echo $fgets."<br>";
            }
        } else {
            echo "���̻� ���� ������ �����ϴ�.";
        }
    }


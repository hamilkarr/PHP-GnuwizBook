<?php
    header('content-type:text/html; charset=euc-kr');

    $content = " 한글 테스트!";
    $fileName = 'helloworld.txt';

    // if(file_exists($fileName)){
    //     $fopen = fopen($fileName,'r');
    //     if($fopen) {
    //         $fread = fread($fopen, filesize($fileName));
    //         if($fread) {
    //             echo $fread;
    //             fclose($fopen);
    //         } else {
    //             echo "파일 읽기에 실패했습니다.";
    //         }
    //     }else {
    //         echo "파일 열기에 실패했습니다.";
    //     }
    // }else {
    //     echo "파일이 존재하지 않습니다.";
    // }

    if(file_exists($fileName)) {
        $fopen = fopen($fileName, 'r');
        $readByte = 512;
        if($fopen) {
            while($fgets = fgets($fopen,$readByte)){
                echo $fgets."<br>";
            }
        } else {
            echo "더이상 읽을 파일이 없습니다.";
        }
    }


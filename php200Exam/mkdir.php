<?php
    header('content-type:text/html; charset=euc-kr');

    $folderName = 'hello';
    // $makeDir = mkdir($folderName,777);
    // if ($makeDir) {
    //     echo "{$folderName} 폴더 생성 완료";
    // } else {
    //     echo "{$folderName} 폴더 생성 실패";
    // }
    // echo "<br>";

    // $isDir = is_dir($folderName);
    // if($isDir) {
    //     echo "{$folderName} 폴더가 이미 존재합니다.";
    // }else {
    //     echo "{$folderName} 폴더가 존재하지 않습니다.";
    // }

    function isDir($folderName) {
        if (is_dir($folderName)) {
            echo "{$folderName} 폴더가 이미 존재합니다.";
        }else {
            echo "{$folderName} 폴더가 존재하지 않습니다.";
        }
        echo "<br>";
    }
    isDir($folderName);
    $folderName = 'world';
    isDir($folderName);
    $folderName = 'hello';
    
    function open_dir($folderName) {
        if(opendir($folderName)){
            echo "{$folderName} 폴더를 열었습니다.";
        } else {
            echo "{$folderName} 폴더를 열지 못했습니다.";
        }
        echo "<br>";
    }
    $folderName = 'hello';
    open_dir($folderName);
    $folderName = 'world';
    open_dir($folderName);

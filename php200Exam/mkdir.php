<?php
    header('content-type:text/html; charset=euc-kr');

    $folderName = 'hello';
    // $makeDir = mkdir($folderName,777);
    // if ($makeDir) {
    //     echo "{$folderName} ���� ���� �Ϸ�";
    // } else {
    //     echo "{$folderName} ���� ���� ����";
    // }
    // echo "<br>";

    // $isDir = is_dir($folderName);
    // if($isDir) {
    //     echo "{$folderName} ������ �̹� �����մϴ�.";
    // }else {
    //     echo "{$folderName} ������ �������� �ʽ��ϴ�.";
    // }

    function isDir($folderName) {
        if (is_dir($folderName)) {
            echo "{$folderName} ������ �̹� �����մϴ�.";
        }else {
            echo "{$folderName} ������ �������� �ʽ��ϴ�.";
        }
        echo "<br>";
    }
    isDir($folderName);
    $folderName = 'world';
    isDir($folderName);
    $folderName = 'hello';
    
    function open_dir($folderName) {
        if(opendir($folderName)){
            echo "{$folderName} ������ �������ϴ�.";
        } else {
            echo "{$folderName} ������ ���� ���߽��ϴ�.";
        }
        echo "<br>";
    }
    $folderName = 'hello';
    open_dir($folderName);
    $folderName = 'world';
    open_dir($folderName);

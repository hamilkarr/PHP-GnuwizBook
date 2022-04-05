<?php
    header('content-type:text/html; charset=euc-kr');

    $folderName = '../php200Exam';
    $opendir = opendir($folderName);

    // if (is_dir($folderName)) {
    //     echo '폴더가 존재합니다.<br>';
    //     if($opendir) {
    //         echo "폴더를 열었습니다.<br>";
    //         while (($readdir = readdir($opendir))) {
    //             echo $readdir.'<br>';
    //         }
    //         closedir($opendir);
    //     } else {
    //         echo '폴더를 열지 못했습니다.';
    //     }
    // } else {
    //     echo '폴더가 존재하지 않습니다.';
    // }
    if($opendir) {
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";

        rewinddir($opendir);
        echo "<br>rewinddir() 함수 실행 후 <br>";

        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
    }

    rmdir('hello');
    if (is_dir('hello')) {
        echo 'hello 폴더가 존재합니다.';
    } else {
        echo 'hello 폴더가 존재하지 않습니다.';
    }
<?php
    header('content-type:text/html; charset=euc-kr');

    $folderName = '../php200Exam';
    $opendir = opendir($folderName);

    // if (is_dir($folderName)) {
    //     echo '������ �����մϴ�.<br>';
    //     if($opendir) {
    //         echo "������ �������ϴ�.<br>";
    //         while (($readdir = readdir($opendir))) {
    //             echo $readdir.'<br>';
    //         }
    //         closedir($opendir);
    //     } else {
    //         echo '������ ���� ���߽��ϴ�.';
    //     }
    // } else {
    //     echo '������ �������� �ʽ��ϴ�.';
    // }
    if($opendir) {
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";

        rewinddir($opendir);
        echo "<br>rewinddir() �Լ� ���� �� <br>";

        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
        echo readdir($opendir)."<br>";
    }

    rmdir('hello');
    if (is_dir('hello')) {
        echo 'hello ������ �����մϴ�.';
    } else {
        echo 'hello ������ �������� �ʽ��ϴ�.';
    }
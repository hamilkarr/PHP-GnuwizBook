<?php
    // header('content-type:text/html; charset=euc-kr');

    $host = 'localhost:3306';
    $user = 'root';
    $pw = 'aA!12345';
    $dbName = 'php200Example';
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset('utf8');

    if(mysqli_connect_errno()) {
        echo "데이터베이스 {$dbName}에 접속 실패";
    } else {
        echo "접속 성공 <br>";
    }


    /*
    if(mysqli_connect_errno()) {
        echo '�����ͺ��̽� ���� ����';
        echo mysqli_connect_error();
    } else {
        echo "���� ����";
        $sql = 'CREATE DATABASE php200Example';
        $res = $dbConnect->query($sql);

        if ($res) {
            echo "�����ͺ��̽� ���� �Ϸ�";
        } else {
            echo "�����ͺ��̽� ���� ����";
        }
    }
    */

<?php
    header('content-type:text/html; charset=euc-kr');

    $host = 'localhost:3306';
    $user = 'root';
    $pw = 'aA!12345';
    $dbName = 'php200Example';
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset('utf8');

    if(mysqli_connect_errno()) {
        echo "�����ͺ��̽� {$dbName}�� ���� ����";
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

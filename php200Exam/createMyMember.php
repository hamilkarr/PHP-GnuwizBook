<?php
    //header('content-type:text/html; charset=euc-kr');

    include $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';

    $sql = "create TABLE myMember(";
    $sql .= "myMemberID int unsigned auto_increment comment '���� ���� ��ȣ',";
    // $sql .= "userId varchar(15) not null comment '���� ���̵�',";
    // $sql .= "name varchar(10) not null comment '����',";
    // $sql .= "password varchar(30) not null comment '���� ��й�ȣ',";
    // $sql .= "phone varchar(13) not null comment '���� ��ȭ��ȣ',";
    // $sql .= "email varchar(30) not null comment '���� �̸���',";
    // $sql .= "birthDay char(10) not null comment '���� �������',";
    // $sql .= "gender enum('m','f','x') default 'x comment '�� ����',";
    // $sql .= "regTime datetime not null comment 'ȸ������ �ð�',";
    $sql .= "primary key(myMemberID))";
    $sql .= "charset=euckr comment='�� ���� ���̺�';";

    $res = $dbConnect->query($sql);

    if($res) {
        echo "���̺� ���� �Ϸ�";
    } else {
        echo "���̺� ���� ����";
    }

    
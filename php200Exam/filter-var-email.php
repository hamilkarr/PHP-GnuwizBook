<?php
    header('content-type:text/html; charset=euc-kr;');
    function checkEmail($email) {
        $emailCheck = filter_Var($email, FILTER_VALIDATE_EMAIL);

        $returnInfo = false;
        if($emailCheck) {
            $returnInfo = true;
        }
        return $returnInfo;
    }

    $email= "12uclock@gmail.com";
    if(checkEmail($email)) {
        echo "{$email}�� �ùٸ� �̸��� �ּ��Դϴ�.";
    }else {
        echo "{$email}�� �ùٸ��� ���� �̸��� �ּ��Դϴ�.";
    }
    echo "<br><br>";

    function checkURL($url){
        $urlCheck = filter_Var($url, FILTER_VALIDATE_URL);
        $returnInfo1 = false;
        if($urlCheck){
            $returnInfo1= true;
        }
        return $returnInfo1;
    }

    $url = "http://www.tomodevel.jp";

    if (checkURL($url)) {
        echo "{$url}�� �ùٸ� URL�Դϴ�.";
    }else {
        echo "{$url}�� �߸��� URL�Դϴ�.";
    }
    echo "<br>";

    $url = "http://www.tomodevel.co.kr";

    function ipChecker($ip){
        // $ip = "192.168.0.1";
        $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);
        //$ip = $this->$ip;
        if ($ipCheck) {
            echo "{$ip}�� �ùٸ� ip �Դϴ�.";
        }else {
            echo "{$ip}�� �ùٸ� ip�� �ƴմϴ�.";
        }
        echo "<br>";
    }

    $ip = "192.168.0.1";
    ipChecker($ip);
    $ip = "192";
    ipChecker($ip);

    function intChecker($int) {
        $intCheck = filter_Var($int, FILTER_VALIDATE_INT);
        if ($intCheck) {
            echo "{$int}�� �ùٸ� ���� �Դϴ�.";
        } else {
            echo "{$int}�� �ùٸ� ������ �ƴմϴ�.";
        }
        echo "<br><br>";
    }

    $int = 694;
    intChecker($int);
    $int = 23123.32423;
    intChecker($int);

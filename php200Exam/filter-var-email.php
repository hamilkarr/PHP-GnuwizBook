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
        echo "{$email}은 올바른 이메일 주소입니다.";
    }else {
        echo "{$email}은 올바르지 않은 이메일 주소입니다.";
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
        echo "{$url}은 올바른 URL입니다.";
    }else {
        echo "{$url}은 잘못된 URL입니다.";
    }
    echo "<br>";

    $url = "http://www.tomodevel.co.kr";

    function ipChecker($ip){
        // $ip = "192.168.0.1";
        $ipCheck = filter_Var($ip, FILTER_VALIDATE_IP);
        //$ip = $this->$ip;
        if ($ipCheck) {
            echo "{$ip}는 올바른 ip 입니다.";
        }else {
            echo "{$ip}는 올바른 ip가 아닙니다.";
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
            echo "{$int}는 올바른 정수 입니다.";
        } else {
            echo "{$int}는 올바른 정수가 아닙니다.";
        }
        echo "<br><br>";
    }

    $int = 694;
    intChecker($int);
    $int = 23123.32423;
    intChecker($int);

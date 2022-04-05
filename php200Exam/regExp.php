<?php
    header('content-type:text/html; charset=euc-kr');

    $pattern = '/^[a-zA-Z\xA1-\xFE. ]+$/';
    //if(preg_match("/[\xA1-\xFE][\xA1-\xFE]/", $str))  
    $str = '웹코딩시작하기. HeLLo';
    // $str = mb_convert_encoding($str,'UTF-8','EUC-KR');
    
    if (preg_match($pattern, $str, $matches)){
        echo "{$str}은 적합한 문장 입니다.";
        echo "<pre>";
        var_dump($str);
        echo "</pre>";
    } else {
        echo "값을 다시 입력하세요.";
    }

    $pattern2 = '/^(010|011|016|017|019)-[^0][0-9]{3,4}-[0-9]{4}/';

    $strPhoneNum = '010-1231-2423';
    if(preg_match($pattern2,$strPhoneNum,$matches2)){
        echo "{$strPhoneNum}은 적절한 번호 입니다.";
        echo "<pre>";
        echo var_dump($strPhoneNum);
        echo"</pre>";
    } else {
        echo "값을 다시 입력하세요.";
    }

    $emailPattern = '/^[a-zA-Z]{1}[a-zA-Z0-9.\-_]+@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]+\.(([a-z]{1}[a-z.]+[a-z]{1}])|([a-z]+))$/';

    $emailStr = 'mybookforweb@gmail.com';
    if (preg_match($emailPattern, $emailStr, $emailMatch)){
        echo "<pre>";
        var_dump($emailMatch);
        echo "</pre>";
    }else{
        echo "error";
    }





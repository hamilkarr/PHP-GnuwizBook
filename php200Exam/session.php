<?php
    header('content-type:text/html; charset=euc-kr');

    session_start();    

    $_SESSION['testSession1'] = 'everdevel';
    $_SESSION['testSession2'] = 'beanscent';
    $_SESSION['testSession3'] = 'tomodevel';

    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";

    if(session_destroy()){
        echo "技记 昏力 肯丰";
    } else {
        echo "技记 昏力 角菩";
    }
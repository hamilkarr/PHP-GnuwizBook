<?php
    
    /*
    namespace agroup;

    function loadUser() {
        return '첫번째 loadUser() 함수';
    }

    namespace bgroup;
    function loadUser() {
        return '두번째 loaduser() 함수';
    }

    header('content-type:text/html; charset=euc-kr');


    echo \agroup\loadUser();
    echo "<br>";
    echo \bgroup\loadUser();
    */

    namespace agroup;

    class user{
        function loadUser() {
            return '첫번째 클래스의 메소드';
        }
    }
    
    namespace bgroup;

    class user{
        function loadUser() {
            return '두번째 클래스의 메소드';
        }
    }

    header('content-type:text/html; charset=euc-kr');

    use \agroup\user as au;
    use \bgroup\user as bu;

    $au = new au;
    echo $au->loadUser();
    echo "<br>";
    $bu = new bu;
    echo $bu->loadUser();
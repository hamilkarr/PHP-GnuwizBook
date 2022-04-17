<?php
    
    /*
    namespace agroup;

    function loadUser() {
        return 'ù��° loadUser() �Լ�';
    }

    namespace bgroup;
    function loadUser() {
        return '�ι�° loaduser() �Լ�';
    }

    header('content-type:text/html; charset=euc-kr');


    echo \agroup\loadUser();
    echo "<br>";
    echo \bgroup\loadUser();
    */

    namespace agroup;

    class user{
        function loadUser() {
            return 'ù��° Ŭ������ �޼ҵ�';
        }
    }
    
    namespace bgroup;

    class user{
        function loadUser() {
            return '�ι�° Ŭ������ �޼ҵ�';
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
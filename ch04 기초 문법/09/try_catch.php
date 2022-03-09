<?php
header('content-type: text/html; charset=euc-kr');

class MyException1 extends Exception {}
class MyException2 extends Exception {}
class MyException3 extends Exception {}

$num = 2;

try {
    if ($num == 1) { throw new MyException1('숫자는 1 입니다.');}
    if ($num == 2) { throw new MyException2('숫자는 2 입니다.');}
    if ($num == 3) { throw new MyException3('숫자는 3 입니다.');}

} catch (myException1 $e) {
    echo "예외 메세지: ".$e->getMessage();
}
 catch (myException2 $e) {
    echo "예외 메세지: ".$e->getMessage();
}
 catch (myException3 $e) {
    echo "예외 메세지: ".$e->getMessage();
}
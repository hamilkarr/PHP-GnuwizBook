<?php
header('content-type: text/html; charset=euc-kr');

class MyException1 extends Exception {}
class MyException2 extends Exception {}
class MyException3 extends Exception {}

$num = 2;

try {
    if ($num == 1) { throw new MyException1('���ڴ� 1 �Դϴ�.');}
    if ($num == 2) { throw new MyException2('���ڴ� 2 �Դϴ�.');}
    if ($num == 3) { throw new MyException3('���ڴ� 3 �Դϴ�.');}

} catch (myException1 $e) {
    echo "���� �޼���: ".$e->getMessage();
}
 catch (myException2 $e) {
    echo "���� �޼���: ".$e->getMessage();
}
 catch (myException3 $e) {
    echo "���� �޼���: ".$e->getMessage();
}
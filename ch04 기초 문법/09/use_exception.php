<?php
header ('content-type: text/htme; charset=euc-kr;');

class myException extends Exception {
  public function myMessage($my_msg) {
    return $my_msg;
  }
  
}

$msg = "���� Ŭ���� ���� �߻�";
$code = 123;
$e = new myException($msg, $code);

echo $e->myMessage("Exception Ŭ������ ��ӹ޾ҽ��ϴ�.")."<br/>"."���� �޽��� : ".$e->getMessage()."<br/>"."���� �ڵ� :".$e->getCode();

<?php
header ('content-type: text/htme; charset=euc-kr;');

class myException extends Exception {
  public function myMessage($my_msg) {
    return $my_msg;
  }
  
}

$msg = "예외 클래스 오류 발생";
$code = 123;
$e = new myException($msg, $code);

echo $e->myMessage("Exception 클래스를 상속받았습니다.")."<br/>"."예외 메시지 : ".$e->getMessage()."<br/>"."예외 코드 :".$e->getCode();

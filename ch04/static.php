<?php
header("Content-Type: text/html;  charset=euc-kr");

class MyClass 
{
  public static $message ="Hello World!";

  public static function say()
  {
    return self::$message;
    // return MyClass::$message;
    // $this�� ���� �Ұ�, Myclass::$message�δ� ���� ����.. ������ ��������....
  }
}

echo MyClass::say();
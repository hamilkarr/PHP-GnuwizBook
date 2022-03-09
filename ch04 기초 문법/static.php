<?php
header("Content-Type: text/html;  charset=euc-kr");

class MyClass 
{
  public static $message ="Hello World!";

  public static function say()
  {
    return self::$message;
    // return MyClass::$message;
    // $this로 접근 불가, Myclass::$message로는 접근 가능.. 하지만 모양새가좀....
  }
}

echo MyClass::say();
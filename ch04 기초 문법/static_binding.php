<?php
header("Content-Type: text/html;  charset=euc-kr");

class A {
  public static function myFunc() {
    static::say();
  }
  public static function say() {
    echo "부모 클래스 호출 <br/>";
  }
}

class B extends A {
  public static function test() {
    A::myFunc();
    parent::myFunc();
    self::myFunc();
  }

  public static function say() {
    echo "자식 클래스 호출 <br/>";
  }
}

B::test();
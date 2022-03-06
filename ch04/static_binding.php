<?php
header("Content-Type: text/html;  charset=euc-kr");

class A {
  public static function myFunc() {
    static::say();
  }
  public static function say() {
    echo "�θ� Ŭ���� ȣ�� <br/>";
  }
}

class B extends A {
  public static function test() {
    A::myFunc();
    parent::myFunc();
    self::myFunc();
  }

  public static function say() {
    echo "�ڽ� Ŭ���� ȣ�� <br/>";
  }
}

B::test();
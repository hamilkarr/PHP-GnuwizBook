<?php
class A {
  public function __construct(){
    echo __CLASS__;
  }

  public function sayHello(){
    return __METHOD__;
  }
  // A::sayHello
}

$say = new A();
echo $say->sayHello();
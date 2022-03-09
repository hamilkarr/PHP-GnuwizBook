<?php
header ("Content-Type: text/html; charset=euc-kr");
class Example {
  function __construct() { echo "Example 클래스 초기화 <br/>";}
  function show() { echo "hello world <br/>";}
  function __destruct() { echo "Example 클래스 소멸 <br/>";}
}

$example = new Example(); // 생성자와 소멸자는 인스턴스 생성시 무조건 발동
// $example->show(); // 멤버함수는 호출시에만 발동



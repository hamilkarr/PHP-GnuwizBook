<?php
header ("Content-Type: text/html; charset=euc-kr");
class Example {
  function __construct() { echo "Example Ŭ���� �ʱ�ȭ <br/>";}
  function show() { echo "hello world <br/>";}
  function __destruct() { echo "Example Ŭ���� �Ҹ� <br/>";}
}

$example = new Example(); // �����ڿ� �Ҹ��ڴ� �ν��Ͻ� ������ ������ �ߵ�
// $example->show(); // ����Լ��� ȣ��ÿ��� �ߵ�



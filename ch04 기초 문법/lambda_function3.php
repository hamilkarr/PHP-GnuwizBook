<?php
$sep = ', ';

function myFunc() {
  global $sep; // ���� ������ ����
  $wor = 'world';
  return function ($hel) use ($sep, $wor) { // �Լ� ���� �ܺ� ������ global ������ ���������� �ٲ۵� use���� ����ؼ� ȣ��, �Լ� ���� ���������� use���� ����ؼ� ȣ��

    $exc = "!";
    return $hel. $sep. $wor .$exc;
  };
}

$hello = myFunc();
echo $hello('hello');
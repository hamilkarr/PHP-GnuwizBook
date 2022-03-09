<?php
$sep = ', ';

function myFunc() {
  global $sep; // 전역 변수로 선언
  $wor = 'world';
  return function ($hel) use ($sep, $wor) { // 함수 밖의 외부 변수는 global 선언후 전역변수로 바꾼뒤 use절을 사용해서 호출, 함수 안의 지역변수는 use절을 사용해서 호출

    $exc = "!";
    return $hel. $sep. $wor .$exc;
  };
}

$hello = myFunc();
echo $hello('hello');
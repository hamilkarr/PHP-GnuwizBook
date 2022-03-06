<?php
// define('CONSTANCE', '안녕하세요.');

// function myFunc() {
//   define('MESSAGE', '저는 PHP를 공부합니다');
// }

// myFunc();

// echo CONSTANCE;
// echo MESSAGE;

// const CONSTANCE = '안녕하세요';

// function myFunc() {
//     // const MESSAGE = '저는 PHP를 공부합니다.';
// }

// myFunc();

// class myClass {
//   public const MESSAGE2 ='저는 PHP2를 공부합니다.';

//   public static function foo() {
//     // const BYE = '잘가여';
//   }
// }

// echo CONSTANCE;
// echo myClass::MESSAGE2;

// const 상수는 함수내에서는 사용이 불가능하지만, 클래스 내부에서 프로퍼티 형태로 선언이 가능함.

$fruits = array(
  'apple' => '사과',
  'banana' => '바나나'
);

echo $fruits['apple'];
echo $fruits['banana'];

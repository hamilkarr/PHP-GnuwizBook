<?php
header('Content-Type: text/html; charset=euc-kr');
// $lambda = function ($name) {
//   return $name;  
// };

$lambda = fn() =>"ȫ�浿";


echo $lambda("ȫ�浿")."<br/>";

function say($str) {
  echo $str();
}
say(fn() => "hello world");

// say(function() {return "hello World";});

function talk() {
  return function () { return "hello world";};
}

$noname = talk();
echo $noname();

$x = 1;
$fn = fn() => $x++;
$fn();

echo $x;
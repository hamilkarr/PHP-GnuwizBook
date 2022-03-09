<?php
header("content-type:text/html charset='euc-kr");
class myClass {
  function say($string) {
    echo $string;
  }
}

$my_class = new myClass();
$my_class->say("hello world");

class secondClass {
  function say(string|int $string, $number) :mixed {
    $array = array($string, $number);
    return $array;
  }
}

$second_class = new secondClass();
$result = $second_class->say(string: "hello world",number: 1);
print_r($result);
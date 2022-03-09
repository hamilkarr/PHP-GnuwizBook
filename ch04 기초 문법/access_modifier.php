<?php
header('Content-Type: text/html; charset=euc-kr');

class Example {
  protected $property = 'property';

  protected function myFunc() {
    return 'hello world';
  }
}

$exmaple = new Example();
echo $exmaple->property;
echo "<br/>";
echo $exmaple->myFunc();
<?php

namespace AnswerBook\PHP;

class Student {
  public function __construct(protected $name) {
    // $this->name = $name;
  } // 축약형 함수
  
  public function name() {
    return $this->name;
  }
}

namespace AnswerBook\PYTHON;

class Student {
  public function __construct(protected $name) {}
  
  public function name()
  {
    return $this->name;
  }
}

header("content-type: text/html; charset=euc-kr");
$php = new \AnswerBook\PHP\Student('PHP');
echo $php->name()."<br/>";

$python = new \AnswerBook\PYTHON\Student('PYTHON');
echo $python->name()."<br/>";


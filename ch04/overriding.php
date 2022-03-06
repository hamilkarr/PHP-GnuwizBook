<?php
declare(strict_types=1);
header('Content-Type: text/html; charset=euc-kr');

class Parents {
  public string $txt = "부모클래스의 프로퍼티 입니다. <br/>";
  public function name() :string {
    return "{$this->txt} 부모 메서드 입니다. <br/>";
  }
}

class Child extends Parents {
  public string $txt = "자식 클래스의 프로퍼티 입니다. <br/>";

  public function name(): string {
    return "{$this->txt} 자식 메서드 입니다.<br/>";
  }
}

$parents = new Parents();
$child = new Child();

echo $parents->name();
echo $child->name();
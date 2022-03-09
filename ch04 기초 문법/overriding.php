<?php
declare(strict_types=1);
header('Content-Type: text/html; charset=euc-kr');

class Parents {
  public string $txt = "�θ�Ŭ������ ������Ƽ �Դϴ�. <br/>";
  public function name() :string {
    return "{$this->txt} �θ� �޼��� �Դϴ�. <br/>";
  }
}

class Child extends Parents {
  public string $txt = "�ڽ� Ŭ������ ������Ƽ �Դϴ�. <br/>";

  public function name(): string {
    return "{$this->txt} �ڽ� �޼��� �Դϴ�.<br/>";
  }
}

$parents = new Parents();
$child = new Child();

echo $parents->name();
echo $child->name();
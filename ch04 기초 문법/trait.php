<?php
header("Content-Type: text/html;  charset=euc-kr");

trait Dog {
  public string $type;
  public string $name;
  public int $age;

  public function discribe()
  {
    echo "{$this->type}�� �̸��� {$this->name}�Դϴ�. {$this->age}�� �Դϴ�. <br/>";
  }
}

trait Say {
  abstract public function greet();
}

class Animal {
  use Dog, Say;

  public function greet() {
    echo "�۸�~ �ȳ��ϼ���. <br/>";
  }
}

$animal = new Animal();
$animal->type = "������";
$animal->name =  "����";
$animal->age = "5";

$animal->discribe();
$animal->greet();
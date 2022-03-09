<?php
header("Content-type:text/html; charset=euc-kr");
abstract class Animal{
  public string $type;
  public string $name;
  public int $age;

  public function describe() {
    echo  "{$this->type}�� �̸��� {$this->name}�Դϴ�. {$this->age}�� �Դϴ�. <br/>";
  }

  abstract public function greet();
}

class Dog extends Animal {
  public function greet() { 
    echo "�۸�~ �ȳ��ϼ���. <br/>";
  }
}

$dog = new Dog();
$dog->type = "������";
$dog->name = "����";
$dog->age = "6";

$dog->describe();
$dog->greet();
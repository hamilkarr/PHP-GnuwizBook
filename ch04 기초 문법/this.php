<?php
header('Content-Type: text/html; charset=euc-kr');
class Fruit {
  public $name;
  public $color;

  function set_fruit(string $name, string $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function get_fruit() : string {
    $string = "�� ������ {$this->name} �Դϴ�. ������ {$this->color} �Դϴ�.";

    return $string;
  }
};

$apple = new Fruit();
$apple->set_fruit(name: '���', color: "����"); // php 8�̻󿡼��� ����� ����
echo $apple->get_fruit();
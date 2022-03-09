<?php
header('Content-Type: text/html; charset=euc-kr');
class Member {
  var $id = 'hong';
  public $name = "È«±æµ¿";
  protected $nickname = "Äèµµ";
  private $age = 20;
}

$member = new Member();
echo $member->id;
echo $member->name;
echo $member->nickname;
echo $member->age;
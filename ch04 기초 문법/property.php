<?php
header('Content-Type: text/html; charset=euc-kr');
class Member {
  var $id = 'hong';
  public $name = "ȫ�浿";
  protected $nickname = "�赵";
  private $age = 20;
}

$member = new Member();
echo $member->id;
echo $member->name;
echo $member->nickname;
echo $member->age;
<?php
header("Content-Type: text/html; charset=euc-kr");

interface WebApp {
  public function register ($id, $password, $name);
  public function login ($id, $password);
  public function logout ($id);
}

interface CMS { public function post ($subject); }

class WebSite implements WebApp, CMS {
  public function register ($id, $password, $name) {
    echo "����� ��� : ���̵� = {$id}, �̸�= {$name} <br/>";
  }

  public function login($id, $password) 
  {
    echo "�α��� : {$id} <br/>";
  }

  public function logout($id)
  {
    echo "�α׾ƿ� : {$id} <br/>";
  }

  public function post($subject)
  {
    echo "�Խù� ���: {$subject} <br/>";
  }
}

$website = new WebSite();

$id = 'hong';
$password = 1234;
$name = 'ȫ�浿';
$subject ='�Խù� ���� �Դϴ�.';

$website->register($id,$password, $name);
$website->login($id, $password);
$website->post($subject);
$website->logout($id);
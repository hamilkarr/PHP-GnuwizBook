<?php
  header('content-type:text/html; charset=euc-kr');

  $str = "123���ڿ�";
  echo "���� ���� �������� ".gettype($str)."<br>";

  $str = (int) $str;
  echo "���� ���� �������� ".gettype($str). " ���� {$str} <br>";

  $double = 86.44;
  echo "���� ���� �������� ".gettype($double). "<br>";

  $double = (int) $double;
  echo "���� ���� ��������" . gettype($double). " ���� {$double} <br>";

  $gender = 'boy';
  $likePlace = 'disneyland';

  if ($gender == 'boy' && $likePlace == 'disneyland') {
      echo '�ҳ��� ����Ϸ��带 �����մϴ�.';
  }
  echo "<br>";

  $girl = array();
  $girl = ['gender'=>'girl','likePlace'=>'Universal studio'];

  if($girl['gender'] == 'girl' && $girl['likePlace'] == 'disneyland') {
      echo "�ҳ�� ����Ϸ��带 �����մϴ�.";
  } else if($girl['gender'] == 'girl' && $girl['likePlace'] == 'Universal studio') {
      echo "�ҳ�� ���Ϲ��� ��Ʃ����� �����մϴ�.";
  } else {
      echo "�ҳ�� ������ �Դϴ�.";
  }
  


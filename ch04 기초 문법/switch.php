<?php
header('Content-Type: text/html; charset=euc-kr');
$score = 90;
switch ($score) {
  case 100:
    echo "������ 100�� �Դϴ�.";
    break;
  case 90:
    echo "������ 90�� �Դϴ�.";
    break;
  case 80:
    echo "������ 80�� �Դϴ�.";
    break;  
  default:
    echo "������ 70�� �Դϴ�.";
    break;
  }
  phpinfo();
